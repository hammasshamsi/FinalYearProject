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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/bloglist', function () {
    return view('blog');
});

Route::get('/singleblog', function () {
    return view('singleblog');
});

Route::get('/singleblogleftsidebar', function () {
    return view('singleblogleftsidebar');
});

Route::get('/singleblognosidebar', function () {
    return view('singleblognosidebar');
});

Route::get('/singlealbum', function () {
    return view('singlealbum');
});

Route::get('/committee', function () {
    return view('committee');
});

Route::get('/directory', function () {
    return view('directory');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/contact', function () {
    return view('contact');
});
