<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function admin(){
        $title = 'Admin-Dashboard';
        //return view('pages.index', compact('title'));
        return view('admin.pages.dashboard')->with('title', $title);
    }

    public function productCart(){
        $title = 'Product Cart';
        return view('admin.pages.product-cart')->with('title', $title);
    }

    public function productDetail(){
        $title = 'Product Detail';
        return view('admin.pages.product-detail')->with('title', $title);
    }

    public function productEdit(){
        $title = 'Product Edit';
        return view('admin.pages.product-edit')->with('title', $title);
    }

    public function productList(){
        $title = 'Product List';
        return view('admin.pages.product-list')->with('title', $title);
    }
    public function imagesCropper(){
        $title = 'Image Cropper';
        return view('admin.pages.images-cropper')->with('title', $title);
    }

}
