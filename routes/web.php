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

Route::get('/formRegisterUMKM', function () {
    return view('formUMKM');
})->name('formRegisterUMKM');

Route::post('/insertStore',[StoreController::class, 'insert'])->name('insertStore');

Route::get('/order', function () {
    return view('orderpage');
})->name('orderPage');

Route::get('/katalog', function () {
    return view('katalogMenu');
});

Route::get('/menu', [FoodController::class, 'display'])->name('foods.display');
Route::get('/restaurants', function(){
    return view('restaurants');
});

Route::get('/order/delivery', function () {
    return view('deliverypage');
});

