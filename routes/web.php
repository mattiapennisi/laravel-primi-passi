<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $title = 'Homepage';

    return view('home', ['title' => $title]);
});

Route::get('/about', function () {

    $title = 'About';

    return view('about', ['title' => $title]);
});

Route::get('/contact', function () {

    $title = 'Contact';

    return view('contact', ['title' => $title]);
});
