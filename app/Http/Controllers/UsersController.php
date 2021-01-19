<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suggestion;
use DB;
use Auth;
use App\Addfruit;
use App\addremedy;
use App\Cart;
use App\User;
use App\Order;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
class UsersController extends Controller
{
  public function index(){
      return view('auth.login');
  }
   
  public function about(){
    return view('users.about');
  }

  public function naturo(){
    return view('users.naturopathy');
  }
  public function homeo(){
    return view('users.homeopathy');
  }
  public function general(Request $request){
   
    $data = Addfruit::all();
    return view('users.general')->with('data',$data);    
      
    
  }
  public function success(){
    return view('users.success');
  }
  public function contact(){
    return view('users.contact');
  }
  public function homerem(){
    $data = addremedy::all();
    return view('users.homerem')->with('data',$data);
  }
  public function suggestionadded(Request $request){
    $sug = new suggestion;
    $sug->name = $request->input('name');
    $sug->email= $request->input('email');
    $sug->phone = $request->input('phone');
    $sug->suggestion = $request->input('suggestion');
    $sug->save();
    return redirect('/contact')->with('info','Suggestion submitted Successfully.');
    }
  
  public function search(Request $request){
     if($request->get('search')){
       $query = $request->get('search');
       $data = DB::table('addremedies')
             ->where('description','like','%'.$query.'%')
             ->orWhere('fruitname','like','%'.$query.'%')
             ->get();
        return view('users.searchview')->with('data',$data);    
       
     }
  }
  public function fruitview(Request $request, $id){
    
    $fruits = Addfruit::findOrFail($id);
    return view('users.fruitview')->with('fruits',$fruits);
}
public function addToCart(Request $request){
  
 
    $cart = new Cart;
    $cart->users_id = $request->input('users_id');
    $cart->addfruits_id = $request->input('addfruits_id');
    $cart->save();
    return redirect('/generalinfo');


}
static function cartItem()
{
  $userId=auth()->user()->id;
  return Cart::where('users_id',$userId)->count();
}
public function cartlist(){
  $userId=auth()->user()->id;
  $products= DB::table('cart')
  ->join('addfruits','cart.addfruits_id','=','addfruits.id')
  ->where('cart.users_id',$userId)
  ->select('addfruits.*','cart.id as cart_id')
  ->get();

  return view('users.cartlist',['products'=>$products]);
}
static function removecart($id){
  $cart = Cart::findOrFail($id);
  $cart->delete();
 return redirect('cartlist')->with('info','Product removed from cart Successfully.');
}
public function ordernow(){
  $userId=auth()->user()->id;
  $total=$products= DB::table('cart')
  ->join('addfruits','cart.addfruits_id','=','addfruits.id')
  ->where('cart.users_id',$userId)
   ->sum('addfruits.price');

  return view('users.ordernow',['total'=>$total]);
}
public function orderplace(Request $request){
  $userId=auth()->user()->id;
  $allcart = Cart::where('users_id',$userId)->get();
  foreach($allcart as $cart)
  {
    $order = new Order;
    $order->addfruits_id=$cart['addfruits_id'];
    $order->users_id=$cart['users_id'];
    $order->status="pending";
    $order->payment_method=$request->payment;
    $order->payment_status="pending";
    $order->address=$request->address;
    $order->save();
    Cart::where('users_id',$userId)->delete();
  }
  return redirect('home')->with('info','Order placed Successfully.');
}
public function myorders(){
  $userId=auth()->user()->id;
  $orders= DB::table('orders')
  ->join('addfruits','orders.addfruits_id','=','addfruits.id')
  ->where('orders.users_id',$userId)
   ->get();

  return view('users.myorders',['orders'=>$orders]);
}
}