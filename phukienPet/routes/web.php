<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');

});*/


Route::get('/','ClientController@home');
Route::get('/cart','ClientController@cart');
Route::get('/shop','ClientController@shop');
Route::get('/checkout','ClientController@checkout');
Route::get('/client_login','ClientController@login');
Route::get('/signup','ClientController@signup');
Route::post('/updateqty','ClientController@updateqty');
Route::get('/removeitem/{id}','ClientController@removeitem');
Route::post('/postcheckout','ClientController@postcheckout');
Route::post('/createaccount','ClientController@createaccount');
Route::post('/accessaccount','ClientController@accessaccount');
Route::get('/cient_logout','ClientController@logout');
Route::get('/addToCart/{id}','ClientController@addToCart');
Route::get('/view_by_cate/{name}','ClientController@view_by_cate');




Route::get('/admin','AdminController@dashboard');
Route::get('/orders','AdminController@orders');


Route::get('/addcategory','CategoryController@addcategory');
Route::post('/savecategory','CategoryController@savecategory');
Route::get('/categories','CategoryController@categories');
Route::get('/editcategory/{id}','CategoryController@editcategory');
Route::post('/updatecategory','CategoryController@updatecategory');
Route::get('/deletecategory/{id}','CategoryController@deletecategory');


Route::get('/addproduct','ProductController@addproduct');
Route::get('/products','ProductController@products');
Route::post('/saveproduct','ProductController@saveproduct');
Route::get('/editproduct/{id}','ProductController@editproduct');
Route::post('/updateproduct','ProductController@updateproduct');
Route::get('/deleteproduct/{id}','ProductController@deleteproduct');
Route::get('/activate_product/{id}','ProductController@activate_product');
Route::get('/unactivate_product/{id}','ProductController@unactivate_product');


Route::get('/addslider','SliderController@addslider');
Route::get('/sliders','SliderController@sliders');
Route::post('/saveslider','SliderController@saveslider');
Route::get('/editslider/{id}','SliderController@editslider');
Route::post('/updateslider','SliderController@updateslider');
Route::get('/deleteslider/{id}','SliderController@deleteslider');
Route::get('/unactivate_slider/{id}','SliderController@unactivate_slider');
Route::get('/activate_slider/{id}','SliderController@activate_slider');




Route::get('/view_pdf/{id}','PdfController@view_pdf');

Auth::routes();

Route::get('/home', 'HomeController@index');
