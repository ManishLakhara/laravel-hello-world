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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('products','ProductController@index')->name('products.index');

Route::get('products/create',function(){
    return 'A form to create a products';
})->name('products.create');

Route::post('products',function(){
    //do something to store.....
})->name('products.store');

Route::get('products/{product}',function($product){
    return "showing form ${product}";
})->name('products.view');

Route::get('products/{product}/edit',function($product){
    return "showing form to edit product ${product}";
})->name('products.edit');

Route::match(['put','patch'],'products/{products}',function($product){
    //task on product
})->name('products.update');
Route::delete('products/{products}',function($product){
    //task to delete some product
})->name('products.destroy');
