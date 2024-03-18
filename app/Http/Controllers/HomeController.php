<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;



class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
    

    if($usertype=='1'){
        return view('admin.home');
    }
    else{
        $data=Product::paginate(3);

        $User=auth()->user();

        $count=cart::where('phone',$User->phone)->count();;

       
        return view('User.home',compact('data','count'));
    }

}
public function index(){
    

    if(Auth::id()){

        return redirect('redirect');

    }
    else{
        $data=Product::paginate(3);
        return view('User.home',compact('data'));
    }
  
}
public function search(Request $request){
    
    $User=auth()->user();

    $search=$request->search;
    $count=cart::where('phone',$User->phone)->count();


    if($search==''){
        $data = Product::paginate(3);
        return view('User.home',compact('data'));
    }


    $data=Product::where('title','Like','%'.$search.'%')->get();

    return view('user.home',compact('data','count'));
}


    public function addcart(Request $request,$id){
        if(Auth::id()){
            $User=auth()->user();
            $product=Product::find($id);
            $cart=new Cart;

            $cart->name=$User->name;
             $cart->phone=$User->phone;
              $cart->address=$User->address;
               $cart->product_title=$product->title;
                $cart->price=$product->price;
                $cart->quantity=$request->quantity;
                $cart->save();

      


            return redirect()->back()->with('message','Product Added Successfully' );
        }
        else{
            return  redirect('login');
        }

    }

    public function showcart(){

        $User=auth()->user();

        $cart=cart::where('phone',$User->phone)->get();

        $count=cart::where('phone',$User->phone)->count();

        return view('user.showcart',compact('count','cart'));

        // return redirect()->back();

    }
    public function deletecart($id){

        $data=Cart::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted successfully');
    }

    public function confirmorder(Request $request){

        $User=auth()->User();

        $name=$User->name;

        
        $phone=$User->phone;
        
        $address=$User->address;

        foreach($request->productname as $key=>$productname) {

            $order=new Order;

            $order->product_name=$request->productname[$key];

            
            $order->price=$request->price[$key];
            
            $order->quantity=$request->quantity[$key];

            $order->name=$name;

            
            $order->phone=$phone;

            
            $order->address=$address;

            
            $order->status='not delivered';

            $order->save();




        }

        DB::table('carts')->where('phone',$phone)->delete();
        
        return redirect()->back()->with('message', 'Order Confirmed successfully');
        

        
    }
}

