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



