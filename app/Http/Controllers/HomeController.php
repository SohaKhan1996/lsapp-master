<?php

namespace App\Http\Controllers;
use App\Product;
use App\Post;
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
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        $products = Product::inRandomOrder()->take(5)->get();
        return view('index')->with('title',$title)->with('products',$products)->with('posts', $posts);
        
    }


}
