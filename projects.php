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
        <div class="title">Volkswagen Caddy</div>
      </div>

      <div class="video-container">
        <video muted loop preload="metadata">
          <source src="Videos/VolkswagenCade.mp4" type="video/mp4" />
          Je browser ondersteunt geen video.
        </video>
        <div class="overlay"></div>
        <div class="title">Volkswagen T-roc R</div>
      </div>

      <div class="video-container">
        <video muted loop preload="metadata">
          <source src="Videos/Jaguar.mp4" type="video/mp4" />
          Je browser ondersteunt geen video.
        </video>
        <div class="overlay"></div>
        <div class="title">Jaguar XK</div>
      </div>
    </div>
  </div>

<script src="furniture/Projects.js"></script>
</body>
</html>
