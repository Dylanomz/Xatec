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

<div class="page-title">
    <h1>Car Tuning</h1>
  </div>

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
  
  

  <div id="admin-container">
    <div id="admin-text">
      Performance Tuning: 
        <br>
        <br>
This focuses on increasing engine power, improving acceleration, and enhancing handling. Common modifications include: 
<br>
<br>
Engine Remapping (ECU Tuning):
<br>
Modifying the Engine Control Unit (ECU) software to optimize fuel delivery, ignition timing, and other parameters for more power and efficiency. 
<br>
<br>
Air Intake and Exhaust Upgrades: 
<br>
Replacing restrictive factory components with high-flow air filters and exhaust systems can improve engine breathing and power output. 
<br>
<br>
Suspension Upgrades: 
<br> 
Modifying the suspension with stiffer springs, shocks, or sway bars can improve handling and reduce body roll, resulting in better grip and cornering. 
      
    </div>
  </div>

   

  
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
      <h4>Xatec</h4>
      <ul>
     <li><a href="index.php">Car Tuning</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="Services.php">Services</a></li>
        <li><a href="menu.php">Menu</a></li>
         <li><a href="shop.php">Insurance</a></li>
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
