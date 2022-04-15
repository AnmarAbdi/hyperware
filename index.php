<?php
  include 'header.php';
?>

<marquee>Enhanced Performance...Faster Speeds...Higher FPS... </marquee>

<div class="laptop">
  <a href="shop.php">
    <img src="https://drive.google.com/uc?export=view&id=1KSKKFPZ1cwPjYwbbO6Bklyg_bVt8_s5g" alt="laptop-with-text"></a>
</div>

<?php
    if (isset($_SESSION['userId'])) {
      echo '<p>You are logged in!</p>';
    }
    else {
      echo '<p>You are logged out!</p>';
    }
  ?>


<!-- Content -->

<div class="browse-header">
  <h1 class="lead">Browse our products</h1>
</div>

<?php
        include "footer.php";
    ?>



<!-- Products Testing -->

  <?php
  session_start();
  // Include functions and connect to the database using PDO MySQL
  include 'functions.php';
  $pdo = pdo_connect_mysql();

  // Page is set to home (home.php) by default, so when the visitor visits that will be the page they see.
  $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
  // Include and show the requested page
  include $page . '.php';
  ?>