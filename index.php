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
      <img src="img/ferrari 559 1920-1080.jpg" style="width:120%">
      <div class="text"><H2>Ferrari 559</H2></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img/lambo groen 1920-1080.jpg" style="width:120%">
      <div class="text"><h2>Lamborgini</h2></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img/bugatti 1920-1080.jpg" style="width:120%">
      <div class="text"><H2>Bugatti</H2></div>
    </div>

  
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>
  <br>

<div class="slideshow-container">

<script src="furniture/index.js"></script>
</body>
</html>
