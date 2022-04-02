<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bannerimage;
use App\Models\Product;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function layoutIndex(){
        return view('admin.layout');
    }

   
}
