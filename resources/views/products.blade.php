<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background: linear-gradient(to right, #1a2734, #2c3e50);
            color: white;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
        }

        .navbar .logo {
            font-family: 'Russo One', sans-serif;
            font-size: 28px;
            color: white;
            letter-spacing: 2px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .navbar .logo:hover {
            color: #f9a825;
        }

        .navbar a {
            color: white;
            font-size: 18px;
            text-decoration: none;
            padding: 12px 20px;
        }

        .navbar a:hover {
            color: #f9a825;
            background-color: #34495e;
            border-radius: 5px;
        }

        .icons {
            display: flex;
            gap: 24px;
        }

        .icons i {
            font-size: 26px;
            color: white;
        }

        .icons i:hover {
            color: #f9a825;
        }

        main {
            padding: 50px 30px;
            display: flex;
            justify-content: space-between;
            gap: 40px;
        }

        /* Sidebar styles for filter */
        .sidebar {
            width: 300px;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .sidebar h3 {
            font-size: 1.6rem;
            margin-bottom: 20px;
            font-weight: 600;
            color: #2c3e50;
        }

        .sidebar .filter-group {
            margin-bottom: 25px;
        }

        .sidebar .filter-group h4 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #34495e;
        }

        .sidebar .filter-group input[type="checkbox"] {
            margin-right: 10px;
        }

        .sidebar button {
            padding: 12px 20px;
            background-color: #f9a825;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .sidebar button:hover {
            background-color: #ffc107;
        }

        /* Product grid styles */
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-between;
        }

        .product {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .product h2 {
            font-size: 1.4rem;
            color: #333;
            margin: 10px 0;
        }

        .product p {
            color: #777;
            font-size: 1rem;
            margin: 10px 0;
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.2);
            border-color: #f9a825;
        }

        .product:hover img {
            transform: scale(1.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: auto;
        }

        footer .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            align-items: center;
        }

        footer .social-icons i {
            font-size: 24px;
            color: white;
        }

        footer .social-icons a {
            text-decoration: none;
            color: white;
        }

        footer .social-icons i:hover {
            color: #f9a825;
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
                align-items: center;
            }

            .sidebar {
                width: 100%;
                margin-bottom: 20px;
            }

            .product {
                width: 90%;
                margin-bottom: 20px;
            }
        }

        /* Chat Bubble */
        .chat-bubble {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #1a2734;
            color: #f9a825;
            padding: 14px 28px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 14px;
            box-shadow: 0 8px 20px rgba(249,168,37,0.8);
            cursor: pointer;
            font-size: 18px;
            z-index: 1100;
            opacity: 0;
            transform: translateY(30px);
            animation: slideIn 0.5s forwards, pulse 1s infinite;
            font-weight: 700;
        }

        @keyframes slideIn {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .chat-bubble i {
            font-size: 22px;
        }

        .chat-bubble:hover {
            background-color: #f9a825;
            color: #1a2734;
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.95);
            transform: scale(1.1);
        }

        /* Chat Popup */
        .chat-popup {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 20px;
            background-color: white;
            color: #222;
            width: 340px;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.2);
            padding: 25px 30px;
            z-index: 1200;
            border-radius: 20px;
        }

        .chat-popup-header {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .chat-popup-body {
            margin-bottom: 20px;
        }

        .chat-popup-body p {
            margin: 8px 0;
            font-size: 16px;
            color: #444;
        }

        .chat-popup input[type="text"] {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 17px;
            margin-top: 10px;
        }

        .quick-replies {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .quick-replies button {
            flex-grow: 1;
            padding: 12px 0;
            background-color: #f9a825;
            color: #1a2734;
            font-weight: 700;
            font-size: 16px;
            border: none;
            border-radius: 35px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .quick-replies button:hover {
            background-color: #ffc107;
            color: #222;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            color: #888;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close-btn:hover {
            color: #f9a825;
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

    <main>
        <!-- Sidebar Filter Section -->
        <div class="sidebar">
            <h3>Filters</h3>
            <!-- Filter options here -->
        </div>

        <!-- Product Grid Section -->
           <div class="product-grid">
            @foreach ($products as $product)
                <div class="product">
                    <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" width="200">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p>Price: Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    <p>{{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}</p>
                    <a href="{{ route('product.detail', $product->id) }}" class="btn btn-primary">View Details</a>
                </div>
            @endforeach
        </div>
    </main>

    <footer>
        <div class="social-icons">
            <i class="fab fa-instagram"></i>
            <a href="https://www.instagram.com/RUSSELSTORE" target="_blank">@RUSSELSTORE</a>
        </div>
    </footer>

    <!-- Chat Bubble -->
    <a href="javascript:void(0);" class="chat-bubble" onclick="toggleChat()">
        <i class="fas fa-comment-alt"></i> Obrolan
    </a>

    <!-- Chat Popup -->
    <div id="chat-popup" class="chat-popup">
        <span class="close-btn" onclick="toggleChat()">×</span>
        <div class="chat-popup-header">Mengobrol dengan kami</div>
        <div class="chat-popup-body">
            <p>Halo, jika Anda ingin melakukan komplain, bisa pilih antara 3 topik yang ada di bawah. Namun, jika Anda ingin menanyakan hal yang lain bisa ketikkan pada kotak yang ada di bawah ini.</p>
            <input type="text" placeholder="Tulis pesan" />
        </div>
        <div class="quick-replies">
            <button>Barang rusak</button>
            <button>Paket belum sampai</button>
            <button>Barang yang dikirim salah</button>
        </div>
    </div>
    <script>
        // Filter functionality
        const inStockFilter = document.getElementById('inStockFilter');
        const limitedEditionFilter = document.getElementById('limitedEdition');
        const sweatsFilter = document.getElementById('sweats');
        const pantsFilter = document.getElementById('pants');
        const teesFilter = document.getElementById('tees');
        const accessoriesFilter = document.getElementById('accessories');
        const products = document.querySelectorAll('.product');

        function applyFilters() {
            products.forEach(product => {
                let display = 'block';

                if (inStockFilter.checked && !product.classList.contains('in-stock')) {
                    display = 'none';
                }

                if (limitedEditionFilter.checked && !product.classList.contains('limited-edition')) {
                    display = 'none';
                }

                if (sweatsFilter.checked && !product.classList.contains('sweats')) {
                    display = 'none';
                }

                if (pantsFilter.checked && !product.classList.contains('pants')) {
                    display = 'none';
                }

                if (teesFilter.checked && !product.classList.contains('tees')) {
                    display = 'none';
                }

                if (accessoriesFilter.checked && !product.classList.contains('accessories')) {
                    display = 'none';
                }

                product.style.display = display;
            });
        }

        // Apply filters whenever the user interacts with the filters
        inStockFilter.addEventListener('change', applyFilters);
        limitedEditionFilter.addEventListener('change', applyFilters);
        sweatsFilter.addEventListener('change', applyFilters);
        pantsFilter.addEventListener('change', applyFilters);
        teesFilter.addEventListener('change', applyFilters);
        accessoriesFilter.addEventListener('change', applyFilters);

        // Reset filters
        function resetFilters() {
            inStockFilter.checked = true;
            limitedEditionFilter.checked = false;
            sweatsFilter.checked = false;
            pantsFilter.checked = false;
            teesFilter.checked = false;
            accessoriesFilter.checked = false;

            applyFilters();
        }

        // Toggle chat popup
        function toggleChat() {
            const chatPopup = document.getElementById('chat-popup');
            chatPopup.style.display = (chatPopup.style.display === 'block') ? 'none' : 'block';
        }
    </script>

</body>
</html>
