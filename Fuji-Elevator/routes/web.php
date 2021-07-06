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
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.aboutUs');
});
Route::get('/teams', function () {
    return view('pages.team');
});
Route::get('/products', function () {
    return view('pages.product');
});
Route::get('/services', function () {
    return view('pages.service');
});
Route::get('/promotion', function () {
    return view('pages.promotion');

});
Route::get('/contact', function () {
    return view('pages.contactUs');
});