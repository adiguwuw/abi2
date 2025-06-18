<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About - RUSSEL</title>
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
            margin-bottom: 20px;
            font-family: 'Russo One', sans-serif;
            text-transform: uppercase;
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
        <h1>About Us</h1>
        <p>RUSSEL adalah brand hoodie premium yang mengutamakan kualitas dan desain keren. Kami berdedikasi memberikan pengalaman terbaik buat kamu yang suka gaya casual tapi tetap keren dan nyaman.</p>
        <p>Kami mulai dari 2018 dan selalu berusaha berkembang dengan inovasi produk dan pelayanan pelanggan yang oke.</p>
    </main>

    <footer>
        &copy; 2025 RUSSEL. All rights reserved.
    </footer>
</body>
</html>
