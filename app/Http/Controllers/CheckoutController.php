<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
        // Pastikan cart ada di session
        $cart = session()->get('cart', []);
        dd(session()->all());  // Periksa apakah cart ada di session

        // Jika cart kosong, tampilkan pesan yang sesuai
        if (empty($cart)) {
            return view('checkout')->with('cart', $cart)->with('message', 'Keranjang Anda kosong.');
        }

        // Kirim data cart ke tampilan checkout
        return view('checkout', compact('cart'));
    }

    public function processCheckout(Request $request)
    {
        // Proses data form checkout (misalnya simpan ke database)
        // Untuk sementara hanya mengarahkan ke halaman konfirmasi setelah checkout

        // Setelah checkout, kosongkan keranjang
        session()->forget('cart');

        // Alihkan pengguna ke halaman checkout dengan pesan sukses
        return redirect()->route('checkout')->with('success', 'Checkout processed successfully!');
    }
}
