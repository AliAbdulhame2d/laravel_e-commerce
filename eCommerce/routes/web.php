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

Route::get('/category/{id}', function ($id) {
    $cat=[
        '1'=>'Games',
        '2'=>'Programming',
        '3'=>'Books',
    ];
    return view('category',[
        'the_cat'=> isset($cat[$id]) ? $cat[$id] :"This Id is not found" 
    ]);
});


/*Route::view('contact-me','contact',[
    'page_name'=>'Contact Me',
    'page_description'=>'This is Discription'
]);*/