<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hoodie Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        /* Navbar Styles */
        header {
            background-image: linear-gradient(to right, #2c3e50, #34495e); /* Dark gradient color */
            color: white;
            padding: 15px 0;
            text-align: center;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-image: linear-gradient(to right, #2c3e50, #34495e); /* Dark gradient color */
        }

        .navbar .logo {
            font-family: 'Russo One', sans-serif;
            font-size: 24px;
            color: white;
            letter-spacing: 1px;
            text-decoration: none; /* Remove underline */
        }

        .navbar .logo:hover {
            text-decoration: underline; /* Add underline on hover */
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

        /* Login Form Styles */
        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin-top: 100px; /* Adjust margin-top to make room for navbar */
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #f9a825;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ffbb33;
        }

        .register-link {
            margin-top: 10px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }

        .register-link:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <!-- Navbar Section -->
    <header>
        <div class="navbar">
            <!-- Add anchor tag around the logo to make it clickable -->
            <a href="{{ url('/') }}" class="logo">RUSSEL</a>
            <div class="icons">
                <a href="{{ url('/login') }}"><i class="fas fa-user"></i></a>
                <a href="{{ url('/cart') }}"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </header>

    <!-- Login Form -->
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('register') }}" class="register-link">Don't have an account? Register</a>
    </div>

</body>
</html>
