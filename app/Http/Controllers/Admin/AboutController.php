<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutIndex(){
        $about=About::all();

        return view('admin.pages.about.index',compact('about'));

    }

    public function aboutCreate(){
        return view('admin.pages.about.create');
    }

    public function aboutStore(Request $request){
        if (!empty($request->about_image)) {
            $about_image = fileUpload($request['about_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        About::create([

            'about_image'=>$about_image,
            'about_description'=>$request->about_description,

        ]);

        return redirect()->route('about.index');
    }

    public function aboutEdit($id){
        $edit=About::where('id',$id)->first();
        return view('admin.pages.about.edit',compact('edit'));
    }

    public function aboutUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->about_image)) {
             $about_image = fileUpload($request['about_image'], BlogImage());
        } else {
            $var=About::where('id',$id)->first();
           $about_image= $var->about_image;
        }

        About::where('id',$id)->update([
            'about_image'=>$about_image,
            'about_description'=>$request->about_description,

        ]);

        return redirect()->route('about.index');
    }

    public function aboutDelete($id){
        About::where('id',$id)->delete();
        return redirect()->route('about.index');
    }

}
