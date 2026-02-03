<?php

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

Route::get('/about-me', function () {
    return view('about');
});


Route::get('/contact-me', function () {
    return view('contact', ['page_name'=>'Contact Me',
    'page_description'=>'This is Discription'
]);
});

/*Route::view('contact-me','contact',[
    'page_name'=>'Contact Me',
    'page_description'=>'This is Discription'
]);*/