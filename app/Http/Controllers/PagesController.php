<?php

namespace App\Http\Controllers;
use App\Product;
use App\Categories;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function index(){
    //     $title = 'Home';
    //     //return view('pages.index', compact('title'));
    //     return view('index')->with('title', $title);
    // }

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
    public function kitchenGarden(){
        $title= 'Kitchen Gardening';
        return view('pages.kitchen-garden')->with('title',$title);
    }
    // public function getstarted() {
    //     $title= 'Get started with kitchen gardening';
    //    // $problem = \App\kitchen-garden::find($problem_id); //If you have your model 'Problem' located in your App folder
        
    //     return view('pages.gardenplanner') ->with('title',$title);
    //     }
    // public function vegetables(){
    //     $title ='Growing your own fruits and vegetables at home';
    //     return view('pages.vegetables')->with('title',$title);
    // }  
    // public function fruits(){
    //     $title ='Growing your own fruits at home';
    //     return view('pages.fruits')->with('title',$title);
    // }
    public function gardenplanner(){
       
        $title="Home";
        $products = Product::inRandomOrder()->take(7)->get();
        return view('pages.gardenplanner')->with('title',$title)->with('products',$products);
    }

}
