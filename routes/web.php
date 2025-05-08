<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('home');
});

Route::get('/formRegisterUser', function () {
    return view('formRegisterUser');
});

Route::get('/menu', [FoodController::class, 'display'])->name('foods.display');

