<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - {{ $product['name'] }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            line-height: 1.6;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .navbar .logo {
            font-family: 'Russo One', sans-serif;
            font-size: 2rem;
            color: white;
        }

        .navbar .icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .navbar .icons a:hover {
            color: #f9a825;
        }

        .product-detail {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 40px;
            max-width: 1200px;
            margin: 40px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            border: 2px solid rgba(16, 236, 93, 0.5);
        }

        .product-image {
            max-width: 100%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            object-fit: cover;
        }

        .product-info {
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-info h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .product-info p {
            color: #777;
            font-size: 1.1rem;
            margin: 10px 0;
        }

        .product-info .price {
            color: #f9a825;
            font-size: 1.8rem;
            margin: 20px 0;
            font-weight: bold;
        }

        .size-options {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .size-options button {
            padding: 10px 20px;
            font-size: 1rem;
            border: 2px solid #f9a825;
            background-color: transparent;
            color: #333;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .size-options button.selected {
            background-color: #f9a825;
            color: white;
            border-color: #f9a825;
        }

        .size-options button:hover {
            background-color: #ffbb33;
            transform: scale(1.05);
        }

        .quantity-control {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .quantity-control button {
            font-size: 1.5rem;
            background-color: transparent;
            color: #f9a825;
            padding: 10px 16px;
            border: 2px solid #f9a825;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 0 15px;
        }

        .quantity-control input {
            font-size: 1.5rem;
            text-align: center;
            width: 60px;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #ccc;
            margin: 0 5px;
        }

        .add-to-cart, .buy-it-now {
            display: inline-block;
            padding: 15px 30px;
            background-color: #f9a825;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1.2rem;
            text-align: center;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .add-to-cart:hover, .buy-it-now:hover {
            background-color: #ffbb33;
            transform: translateY(-5px);
        }

        .additional-info {
            margin-top: 30px;
            font-size: 14px;
            color: #555;
            line-height: 1.6;
            text-align: center;
        }

        @media (max-width: 768px) {
            .product-detail {
                grid-template-columns: 1fr;
                padding: 20px;
            }

            .size-options {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <a href="{{ url('/') }}" class="logo">RUSSEL</a>
            <div class="icons">
                <a href="{{ url('/login') }}"><i class="fas fa-user"></i></a>
                <a href="{{ url('/cart') }}"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </header>

    <div class="product-detail">
        <div class="product-image">
            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"/>
        </div>

        <div class="product-info">
            <h2>{{ $product['name'] }}</h2>
            <p>{{ $product['description'] }}</p>
            <div class="price">Rp {{ number_format($product['price'], 0, ',', '.') }}</div>

            <!-- Form to select size and add to cart -->
            <form action="{{ route('cart.add', ['id' => $product['id']]) }}" method="POST">
                @csrf
                <div class="size-options">
                    <button type="button" name="size" value="S" class="size-btn" onclick="selectSize('S')">S</button>
                    <button type="button" name="size" value="M" class="size-btn" onclick="selectSize('M')">M</button>
                    <button type="button" name="size" value="L" class="size-btn" onclick="selectSize('L')">L</button>
                    <button type="button" name="size" value="XL" class="size-btn" onclick="selectSize('XL')">XL</button>
                    <button type="button" name="size" value="XXL" class="size-btn" onclick="selectSize('XXL')">XXL</button>
                </div>

                <input type="hidden" name="size" id="selected-size" value="" />

                <div class="quantity-control">
                    <button type="button" onclick="decreaseQuantity()">-</button>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" />
                    <button type="button" onclick="increaseQuantity()">+</button>
                </div>

                <button type="submit" class="add-to-cart">Tambah ke Keranjang</button>
                <a href="{{ url('/checkout') }}" class="buy-it-now">Buy It Now</a>
            </form>

            <div class="additional-info">
                <p><strong>FREE THANK YOU CARD AND STICKER</strong></p>
                <p>Refund berlaku jika ada bukti video saat unboxing. Jika ada kesalahan atau barang rusak dari kami, dimohon konfirmasi via CS sebelum memberi penilaian. Terima kasih atas perhatian Anda.</p>
            </div>
        </div>
    </div>

    <script>
        let selectedSize = '';

        function selectSize(size) {
            selectedSize = size;
            document.getElementById('selected-size').value = selectedSize;

            const sizeButtons = document.querySelectorAll('.size-btn');
            sizeButtons.forEach(button => button.classList.remove('selected'));
            const selectedButton = document.querySelector(`button[value="${size}"]`);
            selectedButton.classList.add('selected');
        }

        function decreaseQuantity() {
            const input = document.getElementById("quantity");
            let currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;
            }
        }

        function increaseQuantity() {
            const input = document.getElementById("quantity");
            let currentValue = parseInt(input.value);
            input.value = currentValue + 1;
        }
    </script>

</body>
</html>
