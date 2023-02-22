<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
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

Route::get('/welcome', function () {
    return "Hi";
});

Route::get('/welcome/{user}/{id}', function ($user,$id) {
    return "Hi ".$user.' '.$id;
});

Route::get('/shop', [SiteController::class,'shop'])->name('shop');
Route::get('/products', [SiteController::class,'products'])->name('products');
Route::get('/details/{id}', [SiteController::class,'details'])->name('details');
Route::resource('contact', ContactController::class);
Route::resource('comment', CommentController::class);
Route::get('/faq', [SiteController::class,'faqPage']);
Route::get('/', [SiteController::class,'landingPage']);

