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

<div class="browse-header">
  <h1 class="lead">Browse our products</h1>
</div>

<!-- Content -->
<section id="about-sec">
  <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 text-center">
          <img src="https://drive.google.com/uc?export=view&id=/16upEZzSFhZyB8ovhj1kSHfULMwPLIQ3V" width="450" height="150" 
          class="img-fluid watch-img">
        </div>
        <div class="col-lg-7 text-lg-right  text-center text-color about-text">
          <h1 >About Company</h1>
          <p class="text">My name is Miguel I am simple man from El Paso Texas. I grew up with my mom and dad. They never made burritos. So one day I asked her to make me one and 
            she told me no, and to never come back in her household. So I founded Bobz Burritos. I hate everyone who works here and they hate me. That is my story.
          </p>
        </div>
      </div>
    </div>
  </section>

<div class="browse-header">
  <h1 class="lead">Browse our products</h1>
</div>

<?php
        include "footer.php";
    ?>



