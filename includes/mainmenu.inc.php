

<div class="nav-links" id="navLinks">

    <?php 

        if($thisPage == "index") {
            $class = "activeMenu";
        } else {
            $class = "";
        }
    ?>
    <a href="index.php" class="<?php print $class; ?>">Home</a>


    <?php 

        if($thisPage == "projects") {
            $class = "activeMenu";
        } else {
            $class = "";
        }
    ?>
    <a href="projects.php" class="<?php print $class; ?>">Projects</a>


    <?php 

        if($thisPage == "services") {
            $class = "activeMenu";
        } else {
            $class = "";
        }
    ?>

    <a href="services.php" class="<?php print $class; ?>">Services</a>



    <?php 

        if($thisPage == "shop") {
            $class = "activeMenu";
        } else {
            $class = "";
        }
    ?>
    
    <a href="shop.php" class="<?php print $class; ?>">Insurance</a>



    <?php 

        if($thisPage == "menu") {
            $class = "activeMenu";
        } else {
            $class = "";
        }
    ?>


    <a href="menu.php" class="<?php print $class; ?>">Menu</a>


    
</div>
<button class="custom-button">
    +31 6 13535888  
</button>

<body>
  <div class="content">
  </div>





