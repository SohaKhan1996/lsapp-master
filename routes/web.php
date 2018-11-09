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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/product', 'PagesController@product');
Route::get('product-detail', 'PagesController@productDetail');
Route::get('/cart', 'PagesController@cart');
Route::get('/services', 'PagesController@services');

// admin

Route::get('/admin', 'AdminController@admin');
Route::get('/product-cart', 'AdminController@productCart');
Route::get('/product-list', 'AdminController@productList');
Route::get('/product-edit', 'AdminController@productEdit');
Route::get('/product-detail', 'AdminController@productDetail');
Route::get('/images-cropper', 'AdminController@imagesCropper');




Route::get('/services', 'PagesController@services');
Route::get('/kitchen-garden', 'PagesController@kitchenGarden');
Route::get('/kitchen-garden/get-started','PagesController@getstarted');
Route::get('/kitchen-garden/get-started/vegetables', 'PagesController@vegetables');
Route::get('/kitchen-garden/get-started/fruits','PagesController@fruits');
Route::get('/kitchen-garden/get-started/inseason','PagesController@inseason');
//Route::get('/kitchen-garden/get-started', ' PagesController@getstarted')->name('getstarted');
//Route::post('/kitchen-garden/get-started', ' PagesController@getstarted')->name('getstarted');
Route::resource('posts', 'PostsController');
// Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom', [
    'uses' => 'Auth\LoginController@login',
    'as' => 'login.custom'
]);
Route::group(['middleware'=>'auth'],function(){
    Route::get('/home',function(){
        return view('home');
    })->name('home');;
    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');;

});
