<?php
  $thisPage = "services";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Service</title>

  <link rel="stylesheet" href="furniture/style.css">
  
  <link rel="stylesheet" href="furniture/Services.css">
   <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">
</head>
<body>

<nav>
  <div class="navbar">
      <img src="img/xatec_clear.png" alt="logo" class="logo">
    <?php require_once("includes/mainmenu.inc.php"); ?>
    
  </div>
</nav>

<div class="container">
    <h1>Our Services</h1>
    <p>Welcome to AutoService Nederland. We offer a wide range of professional car services for both private and business customers.
    Whether you come for a minor maintenance service or a complete engine overhaul,
    you have come to the right place. Your safety and driving pleasure are always our number one priority.</p>

    <div class="section">
      <h2>Periodic Maintenance</h2>
      <p>Regular maintenance prevents major repairs and extends the life of your car. We offer:</p>
      <ul>
        <li>Minor and major maintenance</li>
        <li>Replacement of oil, filters, spark plugs and brake fluid</li>
        <li>Software updates for modern vehicles</li>
        <li>Fully digital maintenance report</li>
      </ul>
    </div>

    <div class="section">
      <h2>Repairs</h2>
      <p>Does your car have a problem or has damage occurred? We provide a fast and reliable solution:</p>
      <ul>
        <li>Engine and transmission repairs</li>
        <li>Brake systems and suspension</li>
        <li>Electrical systems and fault diagnosis</li>
        <li>Exhaust systems and particulate filters</li>
      </ul>
    </div>

    <div class="section">
      <h2>Tire service</h2>
      <p>Your tires are the only point of contact with the road, so good tire service is essential:</p>
      <ul>
        <li>New tires from top brands</li>
        <li>Changing tires (summer/winter)</li>
        <li>Tire balancing and alignment</li>
        <li>Check for tread depth and wear</li>
      </ul>
    </div>

    <div class="section">
      <h2>Air Conditioning Service</h2>
      <p>For a fresh and comfortable ride, properly functioning air conditioning is essential:</p>
      <ul>
        <li>Check operation and coolant</li>
        <li>Refill and clean air conditioning</li>
        <li>Leakage test and compressor repair</li>
      </ul>
    </div>

    <div class="section">
      <h2>MOT inspection</h2>
      <p>Have your car inspected by us according to RDW guidelines. We offer a full MOT inspection with honest advice:</p>
      <ul>
        <li>Fast and reliable inspection</li>
        <li>Free re-inspection when repaired by us</li>
        <li>Direct access to maintenance if necessary</li>
      </ul>
    </div>

    <div class="section">
      <h2>Diagnosis & Tuning</h2>
      <p>Modern cars are full of electronics. With our advanced equipment we can detect and solve any problem:</p>
      <ul>
        <li>Extended fault diagnosis (OBD, CAN bus)</li>
        <li>Motormanagementoptimalisatie</li>
        <li>Chip tuning for better performance and more economical consumption</li>
      </ul>
    </div>

    <div class="section">
      <h2>Business Services & Fleets</h2>
      <p>For companies with multiple vehicles we offer tailor-made solutions:</p>
      <ul>
        <li>Periodic fleet maintenance</li>
        <li>Emergency repairs and pick-up & delivery service</li>
        <li>Transparent reporting and invoicing</li>
      </ul>
    </div>

    <div class="cta">
      <p>Ready for professional service? <a href="menu.php">Contact us directly</a> of <a href="/afspraak">make an appointment online</a> 
      for maintenance or repair. We are here for you!</p>
    </div>
  </div>









  <footer class="footer">
  <div class="footer-container">
    <div class="footer-column">
      <h4>Company</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="Services.php">Our Services</a></li>
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
