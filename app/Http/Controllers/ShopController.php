<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
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
        $category=request()->category;
        if(request()->category){
            $products= Product::with('categories')->whereHas('categories', function($query){
                $query->where('slug',request()->category);
            })->get();
        
        // $categories = Category::all();
        }
        else{
            $products= Product::inRandomOrder()->take(12)->get();
            // $categories= Category::all();
        }
        // $products = Product::inRandomOrder()->take(5)->get();

        $categories= Category::all();

        return view('pages.product')->with([
            'title' => $title,
            'products'=>$products,
            'categories'=>$categories,
            'category'=>$category,
            ]);
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
