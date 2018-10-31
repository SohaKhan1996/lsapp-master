<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home';
        //return view('pages.index', compact('title'));
        return view('index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function blog(){
        $title = 'Blog';
        return view('pages.blog')->with('title', $title);
    }
    public function contact(){
        $title = 'About Us';
        return view('pages.contact')->with('title', $title);
    }
    public function product(){
        $title = 'Products';
        return view('pages.product')->with('title', $title);
    }
    public function productDetail(){
        $title = 'Product-Details';
        return view('pages.product-detail')->with('title', $title);
    }
    public function cart(){
        $title = 'Cart';
        return view('pages.cart')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
