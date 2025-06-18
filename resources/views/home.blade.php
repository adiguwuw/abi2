<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>RUSSEL - Premium Hoodies</title>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<style>
  body {
    margin: 0; padding: 0;
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #2c3e50, #34495e);
    color: #eee;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }
  header {
    background: linear-gradient(135deg, #1a2734, #2c3e50);
    box-shadow: 0 3px 10px rgba(0,0,0,0.7);
  }
  .navbar {
    max-width: 100%;
    margin: 0 auto;
    padding: 12px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .logo {
    font-family: 'Russo One', sans-serif;
    font-size: 28px;
    color: #f9a825;
    letter-spacing: 2px;
    text-decoration: none;
    user-select: none;
    transition: color 0.3s ease;
  }
  .logo:hover {
    color: #ffc107;
  }
  nav a {
    color: #eee;
    margin-left: 30px;
    font-weight: 600;
    font-size: 18px;
    text-decoration: none;
    position: relative;
    transition: color 0.3s ease;
  }
  nav a::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    bottom: -4px;
    left: 0;
    background-color: #f9a825;
    transition: width 0.3s ease;
  }
  nav a:hover {
    color: #f9a825;
  }
  nav a:hover::after {
    width: 100%;
  }
  .icons {
    display: flex;
    gap: 24px;
  }
  .icons i {
    font-size: 26px;
    color: #eee;
    cursor: pointer;
    transition: color 0.3s ease;
  }
  .icons i:hover {
    color: #f9a825;
  }

  main {
    flex-grow: 1;
    width: 100%;
    padding: 40px 60px 80px;
    background: #fff;
    color: #333;
    text-align: center;
    border-radius: 0;
    box-shadow: none;
  }

  main h1 {
    font-family: 'Russo One', sans-serif;
    font-size: 3.8rem;
    color: #2c3e50;
    letter-spacing: 3px;
    margin-bottom: 25px;
    text-transform: uppercase;
  }

  main p {
    font-size: 1.3rem;
    color: #444;
    max-width: 900px;
    margin: 0 auto 40px;
    line-height: 1.6;
  }

  .product-image {
    max-width: 60%;
    height: auto;
    display: block;
    margin: 0 auto 10px;
    border-radius: 35px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .product-image:hover {
    transform: scale(1.07);
    box-shadow: 0 12px 24px rgba(0,0,0,0.25);
  }

  .small-shop-button {
    background-color: #f9a825;
    padding: 14px 0;
    font-size: 18px;
    font-weight: 700;
    color: #1a2734;
    border-radius: 35px;
    text-decoration: none;
    box-shadow: 0 6px 15px rgba(249, 168, 37, 0.8);
    transition: background-color 0.3s ease, color 0.3s ease;
    display: block;
    width: 40%;
    margin: 0 auto 40px;
    text-align: center;
  }
  .small-shop-button:hover {
    background-color: #ffc107;
    color: #222;
    box-shadow: 0 8px 20px rgba(255, 193, 7, 0.9);
  }

  /* Services Section */
  .services-section {
    margin-top: 20px;
    padding: 0 60px;
  }
  .services-section h2 {
    font-family: 'Russo One', sans-serif;
    font-size: 2.8rem;
    color: #2c3e50;
    margin-bottom: 50px;
    text-transform: uppercase;
    text-align: center;
  }
  .services-list {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 60px;
    max-width: 100%;
  }
  .service-item {
    max-width: 260px;
    color: #555;
    cursor: default;
    transition: transform 0.3s ease;
  }
  .service-item:hover {
    transform: translateY(-10px);
  }
  .service-icon {
    font-size: 60px;
    color: #f9a825;
    margin-bottom: 20px;
  }
  .service-title {
    font-weight: 700;
    font-size: 24px;
    color: #2c3e50;
    margin-bottom: 12px;
  }
  .service-desc {
    font-size: 16px;
    color: #444;
    line-height: 1.5;
  }

  /* About Section */
  .about-section {
    max-width: 900px;
    margin: 60px auto 40px;
    color: #555;
    font-size: 18px;
    line-height: 1.7;
    text-align: center;
  }
  .about-section h2 {
    font-family: 'Russo One', sans-serif;
    font-size: 2.8rem;
    color: #2c3e50;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  /* Testimonial Section */
  .testimonial-section {
    max-width: 900px;
    margin: 40px auto 40px;
  }
  .testimonial-section h2 {
    font-family: 'Russo One', sans-serif;
    font-size: 2.8rem;
    color: #2c3e50;
    margin-bottom: 30px;
    text-transform: uppercase;
    text-align: center;
  }
  .testimonial-cards {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
  }
  .testimonial-card {
    background: #f9f9f9;
    color: #333;
    padding: 25px 20px;
    border-radius: 15px;
    max-width: 300px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.1);
    font-style: italic;
    position: relative;
  }
  .testimonial-card::before {
    content: "“";
    font-size: 50px;
    color: #f9a825;
    position: absolute;
    top: 5px;
    left: 15px;
  }
  .author {
    margin-top: 18px;
    font-weight: 700;
    color: #555;
    text-align: right;
  }

  /* FAQ Section */
  .faq-section {
    max-width: 900px;
    margin: 40px auto 80px;
  }
  .faq-section h2 {
    font-family: 'Russo One', sans-serif;
    font-size: 2.8rem;
    color: #2c3e50;
    margin-bottom: 30px;
    text-transform: uppercase;
    text-align: center;
  }
  .faq-item {
    margin-bottom: 20px;
    cursor: pointer;
    border-bottom: 1px solid #ddd;
    padding-bottom: 15px;
  }
  .faq-item h3 {
    font-size: 20px;
    color: #2c3e50;
    margin: 0 0 8px 0;
  }
  .faq-answer {
    display: none;
    font-size: 16px;
    color: #444;
    line-height: 1.6;
  }
  .faq-item.active .faq-answer {
    display: block;
  }

  footer {
    background-color: #1a2734;
    color: #eee;
    text-align: center;
    padding: 18px 40px;
    display: flex;
    justify-content: center;
    gap: 20px;
    align-items: center;
    user-select: none;
  }
  footer .social-icons {
    display: flex;
    gap: 20px;
    align-items: center;
  }
  footer .social-icons i {
    font-size: 28px;
    color: #eee;
    cursor: pointer;
    transition: color 0.3s ease;
  }
  footer .social-icons a {
    color: #f9a825;
    text-decoration: none;
    font-weight: 600;
  }
  footer .social-icons i:hover,
  footer .social-icons a:hover {
    color: #ffc107;
  }

  /* Chat Bubble */
.chat-bubble {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #1a2734;
    color: #f9a825;
    padding: 14px 28px;
    border-radius: 50px; /* Round shape for a more friendly look */
    display: flex;
    align-items: center;
    gap: 14px;
    box-shadow: 0 8px 20px rgba(249,168,37,0.8);
    cursor: pointer;
    font-size: 18px;
    z-index: 1100;
    opacity: 0;
    transform: translateY(30px);
    animation: slideIn 0.5s forwards, pulse 1s infinite; /* Adding a pulsing effect for attraction */
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
    transform: scale(1.1); /* Slight scale effect on hover */
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
    border-radius: 20px; /* Rounded corners for the popup */
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


  @media (max-width: 768px) {
    main {
      padding: 25px 30px;
      margin-top: 20px;
    }
    .product-image {
      max-width: 90%;
    }
    nav a {
      margin-left: 20px;
      font-size: 16px;
    }
    .services-list {
      gap: 35px;
    }
    .service-item {
      max-width: 220px;
    }
    .testimonial-cards {
      flex-direction: column;
      gap: 20px;
    }
    .testimonial-card {
      max-width: 100%;
    }
  }
</style>
</head>
<body>

<header>
  <div class="navbar">
    <a href="{{ url('/') }}" class="logo">RUSSEL</a>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/service') }}">Service</a>
      <a href="{{ url('/contact') }}">Contact</a>
      <a href="{{ url('/about') }}">About</a>
    </nav>
    <div class="icons">
      <a href="{{ url('/login') }}"><i class="fas fa-user"></i></a>
      <a href="{{ url('/cart') }}"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </div>
</header>

<main>
  <h1>Welcome to Our RUSSEL COLECTION</h1>
  <p>Explore our collection of hoodies.</p>
  <img src="{{ asset('images/3.jpg') }}" alt="Hoodie Image" class="product-image" />
  <a href="{{ url('/shop') }}" class="small-shop-button">Shop Now</a>

  <section class="services-section">
    <h2>Our Services</h2>
    <div class="services-list">
      <div class="service-item">
        <i class="fas fa-layer-group service-icon"></i>
        <div class="service-title">Quality Material</div>
        <div class="service-desc">Bahan premium yang lembut dan tahan lama, nyaman dipakai seharian.</div>
      </div>
      <div class="service-item">
        <i class="fas fa-star service-icon"></i>
        <div class="service-title">Exclusive Design</div>
        <div class="service-desc">Desain keren dan unik yang bikin kamu standout di keramaian.</div>
      </div>
      <div class="service-item">
        <i class="fas fa-shipping-fast service-icon"></i>
        <div class="service-title">Fast Delivery</div>
        <div class="service-desc">Pengiriman cepat & terpercaya langsung ke depan pintu rumahmu.</div>
      </div>
      <div class="service-item">
        <i class="fas fa-sync-alt service-icon"></i>
        <div class="service-title">Easy Returns</div>
        <div class="service-desc">Retur gampang kalau barang gak sesuai, tanpa ribet.</div>
      </div>
    </div>
  </section>

  <section class="about-section">
    <h2>About Us</h2>
    <p>
      RUSSEL didirikan dengan semangat menciptakan hoodie berkualitas tinggi yang pas buat kamu yang mau tampil beda dan nyaman.  
      Kami fokus ke material premium, desain eksklusif, dan layanan pelanggan yang ramah dan cepat.
    </p>
  </section>

  <section class="testimonial-section">
    <h2>Customer Testimonials</h2>
    <div class="testimonial-cards">
      <div class="testimonial-card">
        <p>"Hoodienya mantap banget, bahan lembut dan awet! Gak nyesel beli di RUSSEL."</p>
        <div class="author">- Dimas P.</div>
      </div>
      <div class="testimonial-card">
        <p>"Pengiriman cepat, pelayanan ramah. Desainnya juga unik, jadi sering dapet pujian."</p>
        <div class="author">- Nisa R.</div>
      </div>
      <div class="testimonial-card">
        <p>"Retur barang gampang dan tanpa ribet, ini bikin nyaman banget buat beli online."</p>
        <div class="author">- Andi W.</div>
      </div>
    </div>
  </section>

  <section class="faq-section">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
      <h3>Apakah bahan hoodie ini nyaman dipakai sehari-hari?</h3>
      <div class="faq-answer">
        <p>Ya, kami menggunakan bahan premium yang lembut dan tahan lama, cocok untuk penggunaan harian.</p>
      </div>
    </div>
    <div class="faq-item">
      <h3>Berapa lama waktu pengiriman?</h3>
      <div class="faq-answer">
        <p>Pengiriman biasanya memakan waktu 3-5 hari kerja tergantung lokasi.</p>
      </div>
    </div>
    <div class="faq-item">
      <h3>Apa kebijakan retur barang?</h3>
      <div class="faq-answer">
        <p>Kamu bisa retur barang dalam 7 hari jika ada cacat atau tidak sesuai pesanan, tanpa ribet.</p>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="social-icons">
    <i class="fab fa-instagram"></i>
    <a href="https://www.instagram.com/RUSSELSTORE" target="_blank">@RUSSELSTORE</a>
  </div>
</footer>

<a href="javascript:void(0);" class="chat-bubble" onclick="toggleChat()">
  <i class="fas fa-comment-alt"></i>
  Obrolan
</a>

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
    <i class="fas fa-headset customer-service" title="Customer Service"></i>
  </div>
</div>

<script>
  // Toggle chat popup
  function toggleChat() {
    const chatPopup = document.getElementById('chat-popup');
    chatPopup.style.display = (chatPopup.style.display === 'block') ? 'none' : 'block';
  }

  // FAQ toggle
  document.querySelectorAll('.faq-item h3').forEach(item => {
    item.addEventListener('click', () => {
      const parent = item.parentElement;
      parent.classList.toggle('active');
    });
  });
</script>

</body>
</html>
