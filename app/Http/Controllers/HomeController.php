<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Home";
        $products = Product::inRandomOrder()->take(1)->get();
        return view('index')->with('title',$title)->with('products',$products);
        
    }


}
