<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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


Route::get('/products', [SiteController::class,'products'])->name('products');
Route::get('/contact', [SiteController::class,'contactPage']);
Route::get('/faq', [SiteController::class,'faqPage']);
Route::get('/', [SiteController::class,'landingPage']);
