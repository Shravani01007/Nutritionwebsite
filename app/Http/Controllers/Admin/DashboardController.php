<?php

namespace App\Http\Controllers\Admin;
use App\User;
use DB;
use App\addremedy;
use App\suggestion;
use App\Addfruit;
use App\Order;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function addfruit(){
        return view('admin.addfruit');
      }
    public function fruitdb()
      {
          $fruits = Addfruit::all();
          return view('admin.fruitdb')->with('fruits',$fruits);
      }
    public function fruitedit(Request $request, $id){
        $fruits = Addfruit::findOrFail($id);
        return view('admin.fruitedit')->with('fruits',$fruits);
    }
    public function fruitupdate(Request $request, $id){
        $fruits = Addfruit::find($id);
        $fruits->fruitname = $request->input('fruitname');
        $fruits->price = $request->input('price');
        $fruits->description = $request->input('description');
        $fruits->update();
        return redirect('/fruitdatabase')->with('info','Data Updated Successfully.');
    }

    public function fruitdelete(Request $request, $id){
        $fruits = Addfruit::findOrFail($id);
        $fruits->delete();
        return redirect('/fruitdatabase')->with('info','Data Deleted Successfully.');
    }

    public function fruitadded(Request $request){
        $fruits = new Addfruit;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 1){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'_'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $count++;
                }
            }
            $fruits->fruitname = $request->input('fruitname');
            $fruits->category = $request->input('category');
            $fruits->description = $request->input('description');
            $fruits->disease = $request->input('disease');
            $fruits->price = $request->input('price');
            $fruits->photos = $url;
            $fruits->save();
            return redirect('/dashboard')->with('info','Data added Successfully.');
        }

      }

    //suggestion
    public function sugdb()
      {
          $sug = suggestion::all();
          return view('admin.sugdb')->with('sug',$sug);
      }

    public function sugdelete(Request $request, $id){
        $sug = suggestion::findOrFail($id);
        $sug->delete();
        return redirect('/suggestiondatabase')->with('info','Data Deleted Successfully.');
    }

    public function search(Request $request){
        if($request->get('search')){
          $query = $request->get('search');
          $fruits = DB::table('addfruits')
                ->where('description','like','%'.$query.'%')
                ->orWhere('fruitname','like','%'.$query.'%')
                ->paginate(5);
                 
           if(count($fruits)>0){  
           return view('admin.adsearchview',['fruits'=>$fruits]);    
           }
           return redirect('/dashboard')->with('info','No Results Found!!');
        }
     }

//remedy
public function addremedy(){
    return view('admin.addremedy');
  }
  public function remedyadded(Request $request){
    $fruits = new addremedy;
    $images = $request->file('photos');
    $count = 0;
    if($request->file('photos')){
        foreach($images as $item){
            if($count < 1){
                $var = date_create();
                $date = date_format($var, 'Ymd');
                $imageName = $date.'_'.$item->getClientOriginalName();
                $item->move(public_path().'/remedy/',$imageName);
                $url = URL::to("/").'/remedy/'.$imageName;
                $count++;
            }
        }
        $fruits->fruitname = $request->input('fruitname');
        $fruits->description = $request->input('description');
        $fruits->disease = $request->input('disease');
        $fruits->photos = $url;
        $fruits->save();
        return redirect('/dashboard')->with('info','Data added Successfully.');
    }

  }

  public function remedydb()
      {
          $fruits = addremedy::all();
          return view('admin.remedydb')->with('fruits',$fruits);
      }

    public function remedyedit(Request $request, $id){
        $fruits = addremedy::findOrFail($id);
        return view('admin.remedyedit')->with('fruits',$fruits);
    }
    public function remedyupdate(Request $request, $id){
        $fruits = addremedy::find($id);
        $fruits->fruitname = $request->input('fruitname');
        $fruits->description = $request->input('description');
        $fruits->update();
        return redirect('/remedydatabase')->with('info','Data Updated Successfully.');
    }

    public function remedydelete(Request $request, $id){
        $fruits = addremedy::findOrFail($id);
        $fruits->delete();
        return redirect('/remedydatabase')->with('info','Data Deleted Successfully.');
    } 

    //orders
    public function ordersdb()
      {
          $fruits=Addfruit::all();
          $orders = Order::all();
          
          return view('admin.orderdb',compact('orders','fruits'));
      }
    public function orderedit(Request $request, $id){
        $orders = Order::findOrFail($id);
        return view('admin.orderedit')->with('orders',$orders);
    }
    public function orderupdate(Request $request, $id){
        $orders = Order::find($id);
        $orders->status = $request->input('status');
        $orders->payment_status = $request->input('payment_status');
        $orders->update();
        return redirect('/orderdatabase')->with('info','Data Updated Successfully.');
    }
    public function orderdelete(Request $request, $id){
        $orders = Order::findOrFail($id);
        $orders->delete();
        return redirect('/orderdatabase')->with('info','Data Deleted Successfully.');
    } 

}
