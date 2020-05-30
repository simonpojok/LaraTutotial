<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('products', function () {
    return view('products');
});

Route::get('services', function () {
    return view('services');
});

Route::get('users/{id}/friends', function ($id) {
    return $id;
});

Route::get('posts/{id?}', function ($id = 5) {
    return $id;
});

