<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function productIndex(){
       $data=Product::all();

       return view('admin.product.index',compact('data'));
   }

   public function productCreate(){
       return view('admin.product.create');
   }

   public function productStore(Request $request){
    if (!empty($request->product_image)) {
        $product_image = fileUpload($request['product_image'], BlogImage());
    } else {
        return redirect()->back()->with('toast_error', __('Image is  required'));
    }
    Product::create([

        'product_name'=>$request->product_name,
        'product_image'=>$product_image,
        'product_price'=>$request->product_price,
        'product_description'=>$request->product_description,
        'product_quantity'=>$request->product_quantity,
    ]);


        return redirect()->route('product.index')->with('message','Product Add Successfully');
   }
   public function productEdit($id){
       $edit=Product::where('id',$id)->first();
       return view('admin.product.edit',compact('edit'));
   }

   public function productUpdate(Request $request){
    $id=$request->id;
    if (!empty($request->product_image)) {
         $product_image = fileUpload($request['product_image'], BlogImage());
    } else {
        $var=Product::where('id',$id)->first();
       $product_image= $var->product_image;
    }

    Product::where('id',$id)->update([
        'product_name'=>$request->product_name,
        'product_image'=>$product_image,
        'product_price'=>$request->product_price,
        'product_description'=>$request->product_description,
        'product_quantity'=>$request->product_quantity,
    ]);

    return redirect()->route('product.index');
   }

   public function productDelete($id){

    $data=Product::find($id);
    $data->delete();

   return redirect()->back();
}
}
