<?php
  include 'header.php';
?>

<marquee>Enhanced Performance...Faster Speeds...Higher FPS... </marquee>

<div class="laptop">
  <a href="shop.php">
    <img src="https://drive.google.com/uc?export=view&id=1KSKKFPZ1cwPjYwbbO6Bklyg_bVt8_s5g" alt="laptop-with-text"></a>
</div>
<br>
<br>


<div class="browse-header">
  <h1 class="split-text">Check Us Out!</h1>
</div>

<!-- Content -->
<section id="about-sec">
  <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 text-center">
          <img src="https://drive.google.com/uc?export=view&id=16upEZzSFhZyB8ovhj1kSHfULMwPLIQ3V" width="450" class="home-ram">
        </div>
        <div class="col-lg-7 text-lg-right  text-center text-color about-text">
          <h1 >Downloadable Hardware?</h1>
          <p class="text">Download any hardware you need. Need quicker RAM? We can help with that. Want a more high definition gaming experience? Download our featured GPU series. Check out our shop above!
          </p>
        </div>
      </div>
    </div>
  </section>

<?php
    if (isset($_SESSION['userId'])) {
      echo '<p>You are logged in!</p>';
    }
    else {
      echo '<p>You are logged out!</p>';
    }
  ?>


<?php
        include "footer.php";
    ?>



