<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerImage;
use Illuminate\Http\Request;

class BannerimageController extends Controller
{
    public function bannerimageIndex(){
        $banner=BannerImage::all();
        return view('admin.pages.bannerimage.index',compact('banner'));
    }

    public function bannerimageCreate(){
        return view('admin.pages.bannerimage.create');
    }

    public function bannerimageStore(Request $request){
        if (!empty($request->banner_image)) {
            $banner_image = fileUpload($request['banner_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        BannerImage::create([

            'banner_image'=>$banner_image,

        ]);

        return redirect()->route('bannerimage.index');
    }

    public function bannerimageEdit($id){
        $edit=BannerImage::where('id',$id)->first();
        return view('admin.pages.bannerimage.edit',compact('edit'));
    }

    public function bannerimageUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->banner_image)) {
             $banner_image = fileUpload($request['banner_image'], BlogImage());
        } else {
            $var=BannerImage::where('id',$id)->first();
           $banner_image= $var->banner_image;
        }

        BannerImage::where('id',$id)->update([
            'banner_image'=>$banner_image,

        ]);

        return redirect()->route('bannerimage.index');
    }

    public function bannerimageDelete($id){
        BannerImage::where('id',$id)->delete();
        return redirect()->route('bannerimage.index');
    }
}
