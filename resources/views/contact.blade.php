<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact - RUSSEL</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        /* Background gradient animasi */
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
            background: linear-gradient(270deg, #2c3e50, #34495e, #2c3e50, #34495e);
            background-size: 800% 800%;
            animation: gradientBG 20s ease infinite;
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        @keyframes gradientBG {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
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
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #f9a825;
        }
        main {
            flex-grow: 1;
            padding: 40px 40px 60px 40px;
            background: white;
            color: #333;
            border-radius: 15px;
            margin: 40px auto 30px;
            max-width: 800px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            font-size: 16px;
        }
        h1 {
            margin-bottom: 30px;
            font-family: 'Russo One', sans-serif;
            text-transform: uppercase;
            text-align: center;
            color: #2c3e50;
        }
        .contact-info {
            display: flex;
            justify-content: space-around;
            margin-bottom: 35px;
            flex-wrap: wrap;
            gap: 20px;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 16px;
            flex: 1 1 250px;
        }
        .contact-item i {
            font-size: 28px;
            color: #f9a825;
            min-width: 32px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 22px;
        }
        label {
            font-weight: 700;
            color: #2c3e50;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
        }
        label i {
            color: #f9a825;
            min-width: 22px;
            text-align: center;
        }
        input, textarea {
            padding: 14px 18px;
            border-radius: 12px;
            border: 2px solid #ddd;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            resize: vertical;
            font-family: inherit;
            width: 100%;
            box-sizing: border-box;
        }
        input:focus, textarea:focus {
            border-color: #f9a825;
            box-shadow: 0 0 10px #f9a825aa;
            outline: none;
        }
        button {
            padding: 16px;
            background-color: #f9a825;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 6px 18px #f9a825bb;
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }
        button:hover {
            background-color: #ffbb33;
            transform: scale(1.08);
            box-shadow: 0 10px 25px #ffbb3388;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: auto;
            font-size: 14px;
        }
        @media (max-width: 640px) {
            main {
                margin: 20px 20px 30px;
                padding: 30px 20px 40px;
            }
            .contact-info {
                flex-direction: column;
                align-items: center;
            }
            .contact-item {
                justify-content: center;
            }
            label {
                font-size: 16px;
            }
            button {
                font-size: 18px;
                padding: 14px;
                max-width: 100%;
            }
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
        <h1>Contact Us</h1>
        
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <span>+62 812 3456 7890</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <span>support@russelstore.com</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>Jl. Sudirman No. 23, Jakarta</span>
            </div>
        </div>

        <form>
            <label for="name"><i class="fas fa-user"></i> Nama</label>
            <input type="text" id="name" name="name" placeholder="Nama lengkap" required>
            
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="Email kamu" required>

            <label for="message"><i class="fas fa-comment-alt"></i> Pesan</label>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesanmu..." required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </main>

    <footer>
        &copy; 2025 RUSSEL. All rights reserved.
    </footer>
</body>
</html>
