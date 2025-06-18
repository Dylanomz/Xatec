<?php
  $thisPage = "projects";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projects</title>

  <link rel="stylesheet" href="furniture/style.css">
  <link rel="stylesheet" href="furniture/projects.css">
<link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">
</head>
<body>
  <nav>
  <div class="navbar">
      <img src="img/xatec_clear.png" alt="logo" class="logo">
    <?php require_once("includes/mainmenu.inc.php"); ?>
    
  </div>
</nav>

<div class="content">
    <div class="projects-title">Projects</div>
</div>
<div class="container">
    <div class="video-grid">
      <div class="video-container">
        <video muted loop preload="metadata">
          <source src="Videos/VolkswagenCaddy.mp4" type="video/mp4" />
          Je browser ondersteunt geen video.
        </video>
        <div class="overlay"></div>
        <div class="title">Volkswagen T-roc R</div>
      </div>

      <div class="video-container">
        <video muted loop preload="metadata">
          <source src="Videos/VolkswagenCade.mp4" type="video/mp4" />
          Je browser ondersteunt geen video.
        </video>
        <div class="overlay"></div>
        <div class="title">Volkswagen Caddy</div>
      </div>

      <div class="video-container">
        <video muted loop preload="metadata">
          <source src="Videos/Jaguarx.mp4" type="video/mp4" />
          Je browser ondersteunt geen video.
        </video>
        <div class="overlay"></div>
        <div class="title">Jaguar XK</div>
      </div>

      <div class="video-container">
        <video muted loop preload="metadata">
          <source src="Videos/VolkswagenCaddy.mp4" type="video/mp4" />
          Je browser ondersteunt geen video.
        </video>
        <div class="overlay"></div>
        <div class="title">Volkswagen T-roc R</div>
      </div>

      <div class="video-container">
        <video muted loop preload="metadata">
          <source src="Videos/VolkswagenCaddy.mp4" type="video/mp4" />
          Je browser ondersteunt geen video.
        </video>
        <div class="overlay"></div>
        <div class="title">Volkswagen T-roc R</div>
      </div>

      <div class="video-container">
        <video muted loop preload="metadata">
          <source src="Videos/VolkswagenCaddy.mp4" type="video/mp4" />
          Je browser ondersteunt geen video.
        </video>
        <div class="overlay"></div>
        <div class="title">Volkswagen T-roc R</div>
      </div>
    </div>
  </div>

  <script src="furniture/projects.js"></script>
  
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
        <li><a href="menu.php">Contact</a></li>
         <li><a href="shop.php">Insurance</a></li>
      </ul>
    </div>
  <div class="footer-column">
  <h4>Follow Us</h4>
  <div class="social-links">
    <a href="https://www.instagram.com/xatec.official/" target="_blank" rel="noopener">
      <img src="img/Instagram.png" alt="Instagram" style="width: 40px; height: auto;">
    </a>
  </div>
</div>
    </div>
  </div>
</footer>
</body>

</html>
