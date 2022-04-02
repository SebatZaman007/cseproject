<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ShoworderController extends Controller
{
    public function showOrder(){
        $order=Order::all();
        return view('admin.order.index',compact('order'));
    }

  public function updateStatus($id){
      $order=Order::find($id);
      $order->status='Delivered';
      $order->save();

      return redirect()->back();
  }

}
