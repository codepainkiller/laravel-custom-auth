<?php

// view routes
Route::redirect('/', 'login');
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::get('/logout', 'AuthController@logout');
Route::get('/register', 'RegisterController@showRegisterForm');
Route::post('/register', 'RegisterController@register');

// api routes
Route::post('api/auth/login', 'Api\LoginController@login');

// authorized routes
Route::middleware(['auth'])->group(function() {
    Route::get('home', 'HomeController@home')->name('home');
});
