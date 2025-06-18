<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Service - RUSSEL</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
            background: #f4f4f4;
            background-image: linear-gradient(to right, #2c3e50, #34495e);
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background-image: linear-gradient(to right, #2c3e50, #34495e);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: white;
            margin-left: 15px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
        }
        nav a:hover {
            color: #f9a825;
        }
        main {
            flex-grow: 1;
            padding: 40px 20px;
            background: white;
            color: #333;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 900px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 30px;
            font-family: 'Russo One', sans-serif;
            text-transform: uppercase;
            text-align: center;
            color: #2c3e50;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        .service-item {
            background: #f9a825;
            border-radius: 15px;
            padding: 20px;
            color: white;
            box-shadow: 0 4px 10px rgba(249,168,37,0.5);
            text-align: center;
            transition: transform 0.3s ease;
            cursor: default;
        }
        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(249,168,37,0.7);
        }
        .service-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }
        .service-title {
            font-weight: 700;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .service-desc {
            font-size: 14px;
            line-height: 1.4;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo" style="font-family: 'Russo One', sans-serif; font-size: 24px; color: white;">
            <a href="{{ url('/') }}" style="color: white; text-decoration:none;">RUSSEL</a>
        </div>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/service') }}">Service</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="{{ url('/about') }}">About</a>
        </nav>
    </header>

    <main>
        <h1>Our Services</h1>
        <div class="services">
            <div class="service-item">
    <i class="fas fa-star service-icon"></i>
    <div class="service-title">Exclusive Design</div>
    <div class="service-desc">Desain eksklusif dan trendy yang bikin kamu tampil beda dan keren setiap saat.</div>
</div>

            <div class="service-item">
                <i class="fas fa-shipping-fast service-icon"></i>
                <div class="service-title">Fast Delivery</div>
                <div class="service-desc">Pengiriman cepat dan terpercaya ke seluruh Indonesia, langsung ke depan pintu rumahmu.</div>
            </div>
            <div class="service-item">
                <i class="fas fa-headset service-icon"></i>
                <div class="service-title">24/7 Customer Support</div>
                <div class="service-desc">Tim CS kami siap bantu kamu kapan aja, lewat chat, email, atau telepon.</div>
            </div>
            <div class="service-item">
                <i class="fas fa-sync-alt service-icon"></i>
                <div class="service-title">Easy Returns</div>
                <div class="service-desc">Barang tidak sesuai? Tenang, proses retur mudah dan cepat tanpa ribet.</div>
            </div>
        </div>
    </main>

    <footer>
        &copy; 2025 RUSSEL. All rights reserved.
    </footer>
</body>
</html>
