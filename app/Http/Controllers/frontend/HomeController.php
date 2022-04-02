<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\About;
use App\Models\Order;
use App\Models\Client;
use App\Models\Footer;
use App\Models\Contact;
use App\Models\Product;
use App\Models\BannerImage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homeIndex(){
        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $banner=BannerImage::latest()->first();
            $aboutpage=About::latest()->first();
            $data=Product::all();
            $clientpage=Client::latest()->get();
            $footerpage=Footer::latest()->get();
            return view('frontend.master',compact('data','banner','aboutpage','clientpage','footerpage'));
        }

    }

    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.layout');
        }
        else{
            $aboutpage=About::latest()->first();
            $banner=BannerImage::latest()->first();
            $data=Product::all();//for product page
            $clientpage=Client::latest()->get();//see client page
            $footerpage=Client::latest()->get();//footer page

            $user=auth()->user();
            $count=Cart::where('phone',$user->phone)->count();

            return view('frontend.master',compact('data','banner','aboutpage','clientpage','footerpage','count'));
        }
    }

    public function showAbout(){

        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $footerpage=Footer::latest()->get();
            $aboutpage=About::latest()->first();
            return view('frontend.pages.about.frontabout',compact('footerpage','aboutpage'));
        }

    }

    public function showContact(){

        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $footerpage=Footer::latest()->get();
            $aboutpage=About::latest()->first();

            return view('frontend.pages.contact.contact',compact('footerpage'));
        }
    }

    public function showProduct(){

        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $footerpage=Footer::latest()->get();
            $aboutpage=About::latest()->first();
            $data=Product::all();

            return view('frontend.pages.product.product',compact('footerpage','data'));
        }
    }

    public function searchProduct(Request $request){
        $search = $request->search;
        $banner=BannerImage::latest()->first();
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        $aboutpage=About::latest()->first();
        $clientpage=Client::latest()->get();//see client page
        $footerpage=Footer::latest()->get();
       $data= Product::where('product_name','Like','%' . $search .'%')->get();

        return view('frontend.master',compact('data','banner','count','aboutpage','clientpage','footerpage'));
    }

    public function addCart(Request $request ,$id){
        if(Auth::id()){

            $user=auth()->user();
            $dataitem= Product::find($id);
            $cart= new Cart;

           $cart->name=$user->name;
           $cart->phone=$user->phone;
           $cart->address=$user->address;
           $cart->product_title=$dataitem->product_name;
           $cart->quantity=$request->quantity;
           $cart->price=$dataitem->product_price;
           $cart->save();
            return redirect()->back();

        }
        else{
            return redirect()->route('home.index');
        }
    }

    public function showCart(){
        $user=auth()->user();
        $cart=Cart::where('phone',$user->phone)->get();
        $count=Cart::where('phone',$user->phone)->count();
        $footerpage=Footer::latest()->get();

        $total= DB::table('carts')->sum('price');
        return view('frontend.pages.showcart.showcart',compact('count','footerpage','cart','total'));
    }

    public function showproductDelete($id){
        Cart::where('id',$id)->delete();
         return redirect()->back();
    }

    public function confirmOrder(Request $request){
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;

        foreach ($request->productname as $key=>$productname) {

            $order=new Order();
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
          return redirect()->back();

    }

 public function checkoutForm(){
     $user_id=Auth::user()->id;
     $user_details=User::find($user_id);
    $user=auth()->user();
    $count=Cart::where('phone',$user->phone)->count();
    $aboutpage=About::latest()->first();
    $clientpage=Client::latest()->get();//see client page
    $footerpage=Footer::latest()->get();
    return view('frontend.pages.checkout.checkout',compact('count','aboutpage','clientpage','footerpage','user_details'));
 }




}
