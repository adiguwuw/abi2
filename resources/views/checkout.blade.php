<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
            background-color: #2c3e50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #34495e;
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

        .content {
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .checkout-container {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 800px;
            margin-top: 20px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .checkout-container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .checkout-container .form-group {
            margin-bottom: 20px;
        }

        .checkout-container input[type="text"], 
        .checkout-container input[type="email"], 
        .checkout-container input[type="file"], 
        .checkout-container textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .checkout-container button {
            background-color: #f9a825;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
            font-size: 1.1rem;
        }

        .checkout-container button:hover {
            background-color: #ffbb33;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }

        footer .social-icons {
            display: flex;
            justify-content: center;
            gap: 10px;
            align-items: center;
        }

        footer .social-icons i {
            font-size: 24px;
        }

        footer .social-icons a {
            text-decoration: none;
            color: white;
        }

        footer .social-icons i:hover {
            color: #f9a825;
        }

        @media (max-width: 768px) {
            .checkout-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <a href="{{ url('/') }}" class="logo">RUSSEL</a>
        </div>
    </header>

    <div class="content">
        <div class="checkout-container">
            <h1>Checkout</h1>

            <form action="{{ route('checkout.process') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Billing Information Section -->
                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="text" name="address" placeholder="Shipping Address" required>
                </div>
                <div class="form-group">
                    <input type="text" name="city" placeholder="City" required>
                </div>
                <div class="form-group">
                    <input type="text" name="zip" placeholder="Postal Code" required>
                </div>

                <!-- Payment Proof Upload Section -->
                <div class="form-group">
                    <label for="payment-proof">Upload Payment Proof (Image or PDF)</label>
                    <input type="file" name="payment_proof" id="payment-proof" required>
                </div>

                <!-- Additional Comments Section -->
                <div class="form-group">
                    <textarea name="comments" placeholder="Additional Notes or Comments" rows="4"></textarea>
                </div>

                <button type="submit">Proceed to Payment</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="social-icons">
            <i class="fab fa-instagram"></i>
            <a href="https://www.instagram.com/RUSSELSTORE" target="_blank">@RUSSELSTORE</a>
        </div>
    </footer>

</body>
</html>
