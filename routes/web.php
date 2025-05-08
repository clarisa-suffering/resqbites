<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/formRegisterUser', function () {
    return view('formRegisterUser');
});

Route::get('/formUMKM', function () {
    return view('formUMKM');
});

Route::post('/insertStore',[StoreController::class, 'insert'])->name('insertStore');

Route::get('/order', function () {
    return view('orderpage');
});
