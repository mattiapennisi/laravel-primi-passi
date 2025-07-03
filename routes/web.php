<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $title = 'Homepage';

    return view('home', ['title' => $title]);
});

Route::get('/about', function () {

    $title = 'About';

    return view('home', ['title' => $title]);
});
