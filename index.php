<?php
  $thisPage = "index";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <link rel="stylesheet" href="furniture/style.css">
  <link rel="stylesheet" href="furniture/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">
</head>
<body>

<nav>
  <div class="navbar">
      <img src="img/xatec_clear.png" alt="logo" class="logo">
      <?php require_once("includes/mainmenu.inc.php"); ?>
  </div>
</nav>

<div class="page-wrapper">

  <div class="slideshow-container">


    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img class="foto" src="img/ferrari 559 1920-1080.jpg">
      <div class="text"><H2>Ferrari 559</H2></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img class="foto" src="img/lambo groen 1920-1080.jpg">
      <div class="text"><h2>Lamborgini</h2></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img class="foto" src="img/bugatti 1920-1080.jpg">
      <div class="text"><H2>Bugatti</H2></div>
    </div>

  
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>
  <br>

  
  <footer class="footer">
  <div class="footer-container">
    <div class="footer-column">
      <h4>Company</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Affiliate Program</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Get Help</h4>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Shipping</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Order Status</a></li>
        <li><a href="#">Payment Options</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Online Shop</h4>
      <ul>
        <li><a href="#">Watch</a></li>
        <li><a href="#">Bag</a></li>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Dress</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Follow Us</h4>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>


<script src="furniture/index.js"></script>
</body>
</html>
