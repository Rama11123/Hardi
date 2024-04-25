<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mi</title>
  <link rel="shortcut icon" href="gambar/mi logo.png" type="image/x-icon">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <a href="index.php"><img src="gambar/mi logo.png" alt="Logo" style="width: 50px; height: auto; border-radius: 15px;"></a>
    </div>
    <ul class="nav-links">
      <li><a href="test.html"><img class="cart" src="gambar/cart-removebg-preview.png" alt=""></a></li>
      <li><a href="#"><img src="gambar/acc logo.png" alt="" class="cart"></a></li>
      <li><a href="#">Support</a></li>
    </ul>
  </nav>
  <div class="hero-slider">
    <div class="slides">
    <div class="slide active">
        <img src="gambar/samsung-galaxy-s23-ultra-1674035044.jpg" alt="">
    </div>
    <div class="slide">
      <img src="gambar/342ce95b8ea6494eb7679c1ebf4ed654.webp" alt="">
    </div>
    <div class="slide">
      <img src="gambar/x12t.webp" alt="">
    </div>
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <button class="next" onclick="nextSlide()">&#10095;</button>
  </div>
</div>
  <!--content-->
  <!--content clear-->
  <!--footer-->
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-left">
        <h3>Footer Logo</h3>
        <p>Your company slogan goes here.</p>
      </div>
      <div class="footer-right">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 Your Company. All rights reserved.</p>
    </div>
  </footer>
  <!--footer clear-->
  <script src="script.js"></script>
  <?php include "db.php"; ?>
</body>
</html>