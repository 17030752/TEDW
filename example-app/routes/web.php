<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\BussinessController;
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
});

Route::get('/hello1', function () {
    return "HELLO WORLD!";
});
Route::get('/hello2', function () {
    return view("hello2");
});
Route::get('/hello3', [HelloController::class, 'hello3']);
Route::get('/hello4', [HelloController::class, 'hello4']);
Route::get('/hello5/{name}', [HelloController::class, 'hello5']);
Route::get('/hello6/{name?}', [HelloController::class, 'hello6']);

Route::get('/home', [SiteController::class, 'home']);
Route::get('/services', [SiteController::class, 'services']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/blog', [SiteController::class, 'blog']);
Route::get('/products', [SiteController::class, 'products']);
Route::get('/bussiness/index',[BussinessController::class,'home']) ->name('home');
Route::get('/bussiness/contact',[BussinessController::class,'contact']) ->name('contact');
Route::get('/bussiness/about',[BussinessController::class,'about']) ->name('about');
Route::get('/bussiness/blog',[BussinessController::class,'blog']) ->name('blog');
Route::get('/bussiness/services',[BussinessController::class,'services']) ->name('services');