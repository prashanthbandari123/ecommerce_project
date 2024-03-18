<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // public function product()
    // {
    //     return view('admin.product');
    // }.

    public function uploadproduct(Request $request)
    {

        $data = new Product;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('productimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;

        $data->save();
        return redirect()->back()->with('message', 'Product Added sucessfully');



    }

    public function products()
    {
        $User=auth()->user();

        $count=Cart::where('phone',$User->phone)->count();
        return view('products',compact('count','User'));
    }

    

    public function about()
    {
        $User=auth()->user();

        $count=Cart::where('phone',$User->phone)->count();
        return view('about',compact('count','User'));
    }

    public function contact()
    {
        $User=auth()->user();

        $count=Cart::where('phone',$User->phone)->count();
        return view('contact',compact('count','User'));
    }

    public function adminproduct()
    {
        $User=auth()->user();

        $count=Cart::where('phone',$User->phone)->count();
        return view('admin.product',compact('count','User'));
    }

    public function showproduct()
    {
        $data = Product::all();
        return view('admin.showproduct', compact('data'));
    }
    public function deleteproduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted sucessfully');
    }

    public function updateview($id)
    {

        $data=Product::find($id);

        return view('admin.updateview', compact('data'));

      
       
    
    }

    public function updateproduct(Request $request , $id) {

        $data=Product::find($id);
        $image = $request->file;
        if($image){
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('productimage', $imagename);

        $data->image = $imagename;
        }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;

        $data->save();
        return redirect()->back()->with('message', 'Product Updated sucessfully');
    }

    public function showorder(){

        $order=Order::all();
        return view('admin.showorder',compact('order'));
    }

    public function updatestatus($id){
        $order=Order::find($id);
        $order->status='delivered';
        $order->save();
        return redirect()->back();

    }
  
}
