<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Products";
        $products = Product::inRandomOrder()->take(5)->get();
        return view('pages.product')->with('title',$title)->with('products',$products);
    }

    public function show($slug)
    {
        $title="Products";
        $product=Product::where('slug',$slug)->firstOrFail();
        $relatedProducts = Product::where('slug','!=', $slug)->inRandomOrder()->take(4)->get(); 
        return view('pages.product-detail')->with('title',$title)->with([
            'product'=>$product,
            'relatedProducts'=>$relatedProducts,
    ]);
    }

   }
