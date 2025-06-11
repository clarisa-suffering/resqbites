<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

//middleware
// Routes untuk guest (belum login)
Route::middleware('guest')->group(function () {
    // Tampilkan form registrasi
    Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');

    // Proses form registrasi user
    Route::post('/register', [UserController::class, 'store'])->name('register.store');

    // Tampilkan form login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

    // Proses login
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

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


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
