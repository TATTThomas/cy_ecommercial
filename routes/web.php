<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/item_detail',function() {
    return view('item.item_detail');
});

Route::get('/contact',function() {
    return view('contact');
});

Route::get('/cart',function() {
    return view('cart');
});

Route::controller(ItemController::class)->group(function() {
    Route::get('/item','index')->name('item.shop');
    Route::post('/item','store')->name('item.store');
    Route::get('/item/create','create')->name('item.create');
    // Route::get('/item/{item}','show')->name('item.show');
    // Route::put('/item/{item}','update')->name('item.update');
    // Route::delete('/item/{item}','destroy')->name('item.destroy');
    // Route::get('/item/{item}/edit','edit')->name('item.edit');
});

