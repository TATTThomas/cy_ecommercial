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
    Route::get('/item','index')->name('item.index');// 所有商品列表
    Route::post('/item','store')->name('item.store');//後台儲存商品
    Route::get('/item/create','create')->name('item.create'); //後台新增商品
    Route::get('/item/{item}','show')->name('item.show');// 單一商品顯示
    Route::put('/item/{item}','update')->name('item.update');//後台更新商品
    Route::get('/item/{item}/edit','edit')->name('item.edit');//後台編輯商品
    Route::delete('/item/{item}','destroy')->name('item.destroy');//後台刪除商品

});

// 前端主畫面另起一個controller -> HomeController

