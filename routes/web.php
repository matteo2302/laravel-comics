<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products=config('fumetti');
    return view('home',compact('products'));
});
Route::get('/product/{index}',function($index){
    $products=config('fumetti');
    $product= $products[$index];
    return view('product',compact('product'));
})->name('product');