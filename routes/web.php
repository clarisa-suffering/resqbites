<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/formRegisterUser', function () {
    return view('formRegisterUser');
});

Route::get('/formRegisterUMKM', function () {
    return view('formUMKM');
})->name('formRegisterUMKM');

Route::post('/insertStore', [StoreController::class, 'insert'])->name('insertStore');

Route::get('/order', function () {
    return view('orderpage');
})->name('orderPage');

Route::get('/sellerdashboard', function () {
    return view('sellerdashboard');
})->name('sellerdashboard');


Route::get('/katalog', function () {
    return view('katalogMenu');
});

Route::get('/menu', [FoodController::class, 'display'])->name('foods.display');
Route::get('/restaurants', function () {
    return view('restaurants');
});

Route::get('/order/delivery', function () {
    return view('deliverypage');
});

Route::get('/seller', function () {
    return view('sellerdashboard');
});


Route::get('/selleradd', function () {
    return view('selleraddproduct');
})->name('seller.products.add');

Route::post('/seller/products', [ProductController::class, 'store'])->name('seller.products.store');

Route::get('/addproduct', function () {
    return view('selleraddproduct'); // path ke blade file addproduct.blade.php
})->name('addproduct');
