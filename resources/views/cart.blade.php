<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Hoodie Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Styling untuk body dan halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* Navbar Styling */
        header {
            background-image: linear-gradient(to right, #2c3e50, #34495e); /* Dark gradient color */
            color: white;
            padding: 15px 0;
            text-align: center;
            width: 100%;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-image: linear-gradient(to right, #2c3e50, #34495e);
            width: 95%;
        }

        .navbar .logo {
            font-family: 'Russo One', sans-serif;
            font-size: 24px;
            color: white;
            letter-spacing: 1px;
        }

        .navbar a {
            color: white;
            font-size: 20px;
            text-decoration: none;
            padding: 10px;
        }

        .icons {
            display: flex;
            gap: 20px;
        }

        .icons i {
            font-size: 24px;
            color: white;
        }

        .icons i:hover {
            color: #f9a825; /* Hover color */
        }

        /* Styling untuk cart */
        h1 {
            font-size: 2rem;
            color: #333;
            margin-top: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        .cart-item img {
            max-width: 100px;
            border-radius: 8px;
        }

        .cart-item-details {
            flex-grow: 1;
            margin-left: 15px;
        }

        .cart-item-details h3 {
            margin: 0;
            font-size: 1.2rem;
            color: #333;
        }

        .cart-item-details p {
            margin: 5px 0;
            color: #777;
        }

        .remove-item {
            color: red;
            font-size: 1rem;
            text-decoration: none;
            cursor: pointer;
        }

        .remove-item:hover {
            text-decoration: underline;
        }

        .cart-total {
            background-color: white;
            padding: 20px;
            width: 80%;
            max-width: 800px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: right;
        }

        .cart-total h3 {
            font-size: 1.6rem;
            margin-bottom: 10px;
            color: #333;
        }

        .checkout-btn, .shop-now-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #f9a825;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1rem;
            text-align: center;
            margin-top: 20px;
        }

        .checkout-btn:hover, .shop-now-btn:hover {
            background-color: #ffbb33;
        }

        .shop-now-btn {
            background-color: #28a745;
            text-align: center;
        }

        .shop-now-btn:hover {
            background-color: #218838;
        }

        .empty-cart-message {
            color: #333;
            font-size: 1.2rem;
            text-align: center;
            margin-top: 40px;
        }

    </style>
</head>
<body>

    <!-- Navbar copied from home.blade.php -->
    <header>
        <div class="navbar">
            <!-- Logo yang menjadi link menuju halaman utama -->
            <a href="{{ url('/') }}" class="logo">RUSSEL</a>
            <div class="icons">
                <a href="{{ url('/login') }}"><i class="fas fa-user"></i></a>
                <a href="{{ url('/cart') }}"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content for Cart -->
    <h1>Keranjang Belanja Anda</h1>

    @if(count($cart) > 0)
        @foreach($cart as $productId => $item)
            <div class="cart-item">
                <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                <div class="cart-item-details">
                    <h3>{{ $item['name'] }}</h3>
                    <p>Harga: Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                    <p>Jumlah: {{ $item['quantity'] }}</p>
                    <p>Ukuran: {{ $item['size'] }}</p>  <!-- Display the selected size -->
                </div>
                <a href="{{ route('cart.remove', $productId) }}" class="remove-item">Hapus</a>
            </div>
        @endforeach

        <div class="cart-total">
            <h3>Total: Rp 
                {{ number_format(array_sum(array_map(function ($item) { return $item['price'] * $item['quantity']; }, $cart)), 0, ',', '.') }}
            </h3>
            <a href="{{ url('/checkout') }}" class="checkout-btn">Checkout</a>
        </div>
    @else
        <p class="empty-cart-message">Keranjang Anda kosong. Mulailah berbelanja!</p>
        <a href="{{ url('/') }}" class="shop-now-btn">Mulai Belanja</a>
    @endif

</body>
</html>
