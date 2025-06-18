<?php
  $thisPage = "menu";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>

  <link rel="stylesheet" href="furniture/style.css">
  <link rel="stylesheet" href="furniture/menu.css">
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
    <h1>Get in touch</h1>
    <p>Do you have any questions about our services, would you like to make an appointment or are you looking for advice? Please feel free to contact us. We are ready to help you quickly and professionally.</p>

    <div class="contact-info">
      <h2>Our data</h2>
      <address>
        Xatec Netherlands<br />
        Schoenerweg 65,<br />
        6222 NX Maastricht<br />
        Netherlands
      </address>
      <div><strong>Phone number:</strong> <a href="tel:+31201234567">+31 20 123 4567</a></div>
      <div><strong>Email:</strong> <a href="mailto:info@autoservicenederland.nl">info@Xatecnederland.nl</a></div>
      <div><strong>KvK number:</strong> 12345678</div>
      <div><strong>BTW number:</strong> NL123456789B01</div>
    </div>

    <div class="map-container">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.917631592649!2d5.689167415860914!3d50.85021597978737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7a4cfcf5b4d0d%3A0x65d7c8bce19b6a6e!2sSchoenerweg%2065%2C%206222%20NX%20Maastricht!5e0!3m2!1snl!2snl!4v1697570000000!5m2!1snl!2snl" 
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <form id="contactForm" method="post" action="#">
      <h2>Send a message</h2>
      <label for="naam">Name *</label>
      <input type="text" id="naam" name="naam" required placeholder="Name" />

      <label for="email">E-mail *</label>
      <input type="email" id="email" name="email" required placeholder="Example@mail.com" />

      <label for="telefoon">Phone number</label>
      <input type="tel" id="telefoon" name="telefoon" placeholder="+31 6 12345678" />

      <label for="onderwerp">subject *</label>
      <input type="text" id="onderwerp" name="onderwerp" required placeholder="What is the subject?" />

      <label for="bericht">Message *</label>
      <textarea id="bericht" name="bericht" required placeholder="You're question?"></textarea>

      <button type="submit">Send message</button>
    </form>

    <div class="faq-section">
      <h2>Most asked questions</h2>

      <div class="faq">
        <strong>1. How do I make an appointment?</strong>
        <p>You can contact us by phone, send an email or use our online appointment form</a>.</p>
      </div>

      <div class="faq">
        <strong>2.Which brands and models do you work with?</strong>
        <p>We work with all makes and models of cars, both young and old. Our mechanics are broadly trained and have the latest equipment.</p>
      </div>

      <div class="faq">
        <strong>3. How long does a maintenance service take?</strong>
        <p>A minor maintenance service usually takes 1 to 2 hours. For a major maintenance service or repair it may take longer. We always inform you in advance about the expected duration.</p>
      </div>

      <div class="faq">
        <strong>4.Can I get a loaner car during repairs?</strong>
        <p>Yes, we have a limited number of rental cars available. Please inquire about the possibilities when making your appointment.</p>
      </div>

      <div class="faq">
        <strong>5. What are the payment options?</strong>
        <p>You can pay with us by debit card, credit card or cash. For business customers payment by invoice is possible after consultation.</p>
      </div>
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
