<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suggestion;
use DB;
use App\Addfruit;
use App\addremedy;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
class UsersController extends Controller
{
  public function index(){
      return view('users.user');
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
       $data = DB::table('addfruits')
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
  

}