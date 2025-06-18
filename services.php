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
    <h1>Onze Diensten</h1>
    <p>Welkom bij AutoService Nederland. Wij bieden een breed scala aan professionele autodiensten voor zowel particulieren als zakelijke klanten. Of u nu komt voor een kleine onderhoudsbeurt of een volledige motorrevisie, bij ons bent u aan het juiste adres. Uw veiligheid en rijplezier staan bij ons altijd op nummer één.</p>

    <div class="section">
      <h2>Periodiek Onderhoud</h2>
      <p>Regelmatig onderhoud voorkomt grote reparaties en verlengt de levensduur van uw auto. Wij bieden:</p>
      <ul>
        <li>Kleine en grote onderhoudsbeurten</li>
        <li>Vervanging van olie, filters, bougies en remvloeistof</li>
        <li>Software-updates voor moderne voertuigen</li>
        <li>Volledig digitaal onderhoudsrapport</li>
      </ul>
    </div>

    <div class="section">
      <h2>Reparaties</h2>
      <p>Heeft uw auto een probleem of is er schade ontstaan? Wij zorgen voor een snelle en betrouwbare oplossing:</p>
      <ul>
        <li>Motor- en transmissiereparaties</li>
        <li>Remsystemen en ophanging</li>
        <li>Elektrische systemen en storingsdiagnose</li>
        <li>Uitlaatsystemen en roetfilters</li>
      </ul>
    </div>

    <div class="section">
      <h2>Bandenservice</h2>
      <p>Uw banden zijn het enige contactpunt met de weg. Daarom is goede bandenservice essentieel:</p>
      <ul>
        <li>Nieuwe banden van topmerken</li>
        <li>Banden wisselen (zomer/winter)</li>
        <li>Banden balanceren en uitlijnen</li>
        <li>Controle op profieldiepte en slijtage</li>
      </ul>
    </div>

    <div class="section">
      <h2>Airco Service</h2>
      <p>Voor een frisse en comfortabele rit is goed werkende airconditioning onmisbaar:</p>
      <ul>
        <li>Controle op werking en koelmiddel</li>
        <li>Airco bijvullen en reinigen</li>
        <li>Leckagetest en compressorreparatie</li>
      </ul>
    </div>

    <div class="section">
      <h2>APK-keuring</h2>
      <p>Laat uw auto bij ons keuren volgens de RDW-richtlijnen. Wij bieden een volledige APK-inspectie met eerlijk advies:</p>
      <ul>
        <li>Snelle en betrouwbare keuring</li>
        <li>Gratis herkeuring bij reparatie door ons</li>
        <li>Directe doorloop naar onderhoud indien nodig</li>
      </ul>
    </div>

    <div class="section">
      <h2>Diagnose & Tuning</h2>
      <p>Moderne auto's zitten vol elektronica. Met onze geavanceerde apparatuur kunnen wij elk probleem opsporen en oplossen:</p>
      <ul>
        <li>Uitgebreide foutdiagnose (OBD, CAN-bus)</li>
        <li>Motormanagementoptimalisatie</li>
        <li>Chiptuning voor betere prestaties en zuiniger verbruik</li>
      </ul>
    </div>

    <div class="section">
      <h2>Zakelijke Service & Vloten</h2>
      <p>Voor bedrijven met meerdere voertuigen bieden wij op maat gemaakte oplossingen:</p>
      <ul>
        <li>Periodiek vlootonderhoud</li>
        <li>Spoedreparaties en haal- & brengservice</li>
        <li>Transparante rapportages en facturatie</li>
      </ul>
    </div>

    <div class="cta">
      <p>Klaar voor vakkundige service? <a href="menu.php">Neem direct contact met ons op</a> of <a href="/afspraak">maak online een afspraak</a> voor onderhoud of reparatie. Wij staan voor u klaar!</p>
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
