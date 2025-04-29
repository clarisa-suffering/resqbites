<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/formRegisterUser', function () {
    return view('formRegisterUser');
});

Route::get('/formUMKM', function () {
    return view('formUMKM');
});
