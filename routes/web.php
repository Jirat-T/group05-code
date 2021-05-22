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

Route::get('/', 'ProductController@index');
Route::get('/detail/{name}', 'ProductController@detail');
Route::get('/category/{name}', 'ProductController@category');
Route::post('/search', 'ProductController@search');



// Route::get('/cart', function () {
//   return view('cart');
// });

// Route::get('/checkout', function () {
//   return view('checkout');
// });

Auth::routes();
