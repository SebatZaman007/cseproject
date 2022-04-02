<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function footerIndex(){
        $footer=Footer::all();
        return view('admin.pages.footer.index',compact('footer'));
    }

    public function footerCreate(){
        return view('admin.pages.footer.create');
    }

    public function footerStore(Request $request){

        Footer::create([

            'footer_map'=>$request->footer_map,
            'footer_call'=>$request->footer_call,
            'footer_mail'=>$request->footer_mail,

        ]);

        return redirect()->route('footer.index');
    }

    public function footerEdit($id){
        $edit=Footer::where('id',$id)->first();
        return view('admin.pages.footer.edit',compact('edit'));
    }

    public function footerUpdate(Request $request){
        $id=$request->id;

        Footer::where('id',$id)->update([
            'footer_map'=>$request->footer_map,
            'footer_call'=>$request->footer_call,
            'footer_mail'=>$request->footer_mail,
        ]);

        return redirect()->route('footer.index');
    }

    public function footerDelete($id){
        Footer::where('id',$id)->delete();
        return redirect()->route('footer.index');
    }
}
