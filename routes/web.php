<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


 Route::get('/', function () {
    return view('home');
});
Route::get('home', function () {
    return view('home');
});
Route::get('about-us', function () {
    return view('about');
})->name('about');
Route::get('service', function () {
    return view('service');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('contact', function () {
    return view('contact');
});
Route::delete('contact/{contact}',[ContactController::class,'delete'])->name('contact.delete');


Route::get('/login',[ContactController::class,'signup'])->name('login');
Route::post('/login',[ContactController::class,'login']);


Route::get('/admin',[ContactController::class,'show'])->middleware("auth");

Route::get('/reset-password',[ContactController::class,'reset'])->middleware("auth");
Route::post('/reset-password',[ContactController::class,'changePassword'])->middleware("auth")->name('reset.password');

Route::get('/logout',[ContactController::class,'logout'])->middleware("auth");

Route::post('/contact', [ContactController::class,'save'])->name('contact');

});
