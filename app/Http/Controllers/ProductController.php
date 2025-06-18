<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product; // Pastikan model Product digunakan
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan daftar produk di halaman product
    public function productList()
    {
        // Mengambil semua produk dari database
        $products = Product::all();

        // Mengirim data produk ke view 'product'
        return view('product', compact('products')); // Mengirim variabel $products ke view 'product'
    }

    // Menampilkan detail produk berdasarkan ID di halaman product detail
    public function productDetail($id)
    {
        // Mengambil produk berdasarkan ID dari database
        $product = Product::find($id);

        // Jika produk tidak ditemukan, tampilkan halaman 404
        if (!$product) {
            abort(404);
        }

        // Mengirim data produk ke view 'product-detail'
        return view('product-detail', compact('product')); // Mengirim variabel $product ke view 'product-detail'
    }
}



