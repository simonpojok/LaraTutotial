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
}) -> where('id', '[0-9]+');

Route::get('users/username', function ($username) {
    return $username;
}) -> where('username', '[A-Za-z]+');

Route::get('posts/{id}/{slug}', function ($id, $slug) {
    return $id;
}) -> where([
    'id' => '[0-9]+',
    'slug' => '[A-Za-z]'
]);

