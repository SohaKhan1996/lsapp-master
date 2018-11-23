<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicate= cart::search(function($cartItem,$rowId) use($request){
            return  $cartItem->id=== $request->id;

        });
        if($duplicate->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message', 'This item is already in your cart');
        }

        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Item was added to your cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Cart::remove($id);
       return back()->with('success_message', 'Item has been removed!');
    }

    
    /**
     * switch to save in the shopping cart for later.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function switchToSaveForLater($id)
    {
       $item=Cart::get($id);
       Cart::remove($id);
       Cart::instance(saveForLater)->add($item->id, $request->name, 1, $request->price)
            ->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Item has been saved for later');
    }
}
