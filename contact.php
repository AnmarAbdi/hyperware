<?php
  include 'header.php';
  ?>
<br>
<br>
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4 about-h1">Customer Feedback</h1>
        </div>
        <br>
    </div>
</div>
<div class="container">
    <p class="words col-sm">Where We're Located</p> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14092.755158991886!2d86.91622033000927!3d27.988119872821486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e854a215bd9ebd%3A0x576dcf806abbab2!2sMt%20Everest!5e0!3m2!1sen!2sus!4v1650467974229!5m2!1sen!2sus" class="google-maps"></iframe>
</div>

<?php


 
 
 if (isset($_GET["signup"])) {
  if ($_GET["signup"] == "success") {
  echo '<p>Signup successful!</p>'; 
 }
}
?>
<div class="container d-flex justify-content-center">
  <div class="row">
    <div class="card">
    <p class="words col-sm">Give Us Feedback!</p> 
      <form action="contact.php" method="post">
        <div class="form-group">
          <input type="text" name="uid" placeholder="Name">
          <input type="text" name="mail" placeholder="Email">
          <input type="text" name="msg" placeholder="Message">
        </div>
        <button type="submit" name="signup-submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</main>






<?php
        include "footer.php"
    ?>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function openCart() {
        document.getElementById("myCart").style.width = "250px";
    }

    function closeCart() {
        document.getElementById("myCart").style.width = "0";
    }

    function openLogin() {
        document.getElementById("myLogin").style.width = "250px";
    }

    function closeLogin() {
        document.getElementById("myLogin").style.width = "0";
    }

    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>

</html>