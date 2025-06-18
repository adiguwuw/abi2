<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Show the Cart page
    public function showCart()
    {
        $cart = session()->get('cart', []); // Retrieve the cart from session
        return view('cart', compact('cart')); // Pass the cart data to the view
    }

    // Add product to the cart
    public function addToCart(Request $request, $productId)
    {
        // Daftar produk yang tersedia
        $products = [
            1 => ['name' => 'ADLV', 'price' => 1400000, 'image' => 'images/ADLV.png'],
            2 => ['name' => 'Chambre Zipper', 'price' => 950000, 'image' => 'images/Chambre.png'],
            3 => ['name' => 'Telepati KISSME B', 'price' => 750000, 'image' => 'images/KISSME B.png'],
            4 => ['name' => 'Telepati KISSME W', 'price' => 750000, 'image' => 'images/KISSME.png'],
            5 => ['name' => 'Ordinary Telepati', 'price' => 750000, 'image' => 'images/Ordinary.png'],
            6 => ['name' => 'Telepati Tc ADDITS', 'price' => 750000, 'image' => 'images/Tc Addits.png']
        ];
    
        // Memeriksa apakah produk ada di daftar
        $product = $products[$productId] ?? null;
    
        if (!$product) {
            abort(404); // Produk tidak ditemukan
        }
    
        // Mendapatkan ukuran yang dipilih dari form
        $size = $request->input('size', 'M'); // Default ke 'M' jika tidak ada ukuran yang dipilih
        $quantity = $request->input('quantity', 1); // Default ke quantity 1 jika tidak ada quantity yang dipilih
    
        // Ambil keranjang yang ada di session
        $cart = session()->get('cart', []);
    
        // Menggunakan id produk dan ukuran sebagai key
        $cartKey = $productId . '_' . $size;
    
        // Cek apakah produk dengan ukuran tersebut sudah ada di keranjang
        if (isset($cart[$cartKey])) {
            // Jika produk sudah ada di keranjang, tambahkan jumlahnya
            $cart[$cartKey]['quantity'] += $quantity;
        } else {
            // Jika produk belum ada, tambahkan produk ke keranjang dengan ukuran dan jumlah
            $cart[$cartKey] = [
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $quantity,
                'image' => $product['image'],
                'size' => $size
            ];
        }
    
        // Simpan keranjang yang sudah diperbarui ke session
        session()->put('cart', $cart);
    
        // Mengarahkan ke halaman keranjang
        return redirect()->route('cart.show');
    }
    

    // Remove product from cart
    public function removeFromCart($productId)
    {
        // Ambil keranjang yang ada di session
        $cart = session()->get('cart', []);

        // Cek apakah produk ada di dalam keranjang
        if (isset($cart[$productId])) {
            // Menghapus produk dari keranjang
            unset($cart[$productId]);
        }

        // Simpan kembali keranjang yang sudah diperbarui ke session
        session()->put('cart', $cart);

        // Kembali ke halaman keranjang
        return redirect()->route('cart.show');
    }
}
