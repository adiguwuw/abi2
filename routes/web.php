<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/cart', function () {
    return view('cart'); // Assuming your cart page is cart.blade.php
})->name('cart');

Route::get('/shop', function () {
    return view('products'); // Assuming your products page is products.blade.php
});

use App\Http\Controllers\ProductController;

// Halaman untuk menampilkan daftar produk
Route::get('/product', [ProductController::class, 'productList'])->name('product.list');

// Halaman untuk menampilkan detail produk berdasarkan ID
Route::get('/product/{id}', [ProductController::class, 'productDetail'])->name('product.detail');

use App\Http\Controllers\CartController;

// Menampilkan keranjang
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

// Menambahkan produk ke keranjang
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');


// Menghapus produk berdasarkan productId dalam cart
Route::get('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');


Use App\Http\Controllers\CheckoutController;  // Add this line for the controller

Route::get('/checkout', function () {
    return view('checkout'); // Returns the checkout view
})->name('checkout');

Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');  // Handle the form submission and payment processing

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});