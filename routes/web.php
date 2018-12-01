<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/admin-dashboard', function () {
//     return view('admin.pages.dashboard');
   
// });
// Route::get('/product-cart', function () {
//     return view('admin.pages.product-cart');
   
// });
/*
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/services', 'PagesController@services');

Route::get('/product', 'ShopController@index')->name('shop.index');
Route::get('/product/{product}', 'ShopController@show')->name('shop.show');

//Route::get('/product-detail', 'PagesController@productDetail');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToSaveForLater/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');


Route::get('empty',function(){
    Cart::instance('saveForLater')->destroy();
});
// admin


Route::get('/product-cart', 'AdminController@productCart');
Route::get('/product-list', 'AdminController@productList');
Route::get('/product-edit', 'AdminController@productEdit');
Route::get('/admin-product-detail', 'AdminController@productDetail');
Route::get('/images-cropper', 'AdminController@imagesCropper');




Route::get('/services', 'PagesController@services');
Route::get('/kitchen-garden', 'PagesController@kitchenGarden');
Route::get('/kitchen-garden/gardenplanner','PagesController@gardenplanner');
Route::get('/kitchen-garden/gardenplanner/vegetables', 'PagesController@vegetables');
//Route::get('/kitchen-garden/get-started/fruits','PagesController@fruits');
//Route::get('/gardenplanner','PagesController@gardenplanner');
Route::resource('posts', 'PostsController');
Auth::routes();



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom',[
    'uses' => 'Auth\LoginController@login',
    'as' => 'login.custom'
]);

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/admin', 'AdminController@admin')->name('admin-login');

});