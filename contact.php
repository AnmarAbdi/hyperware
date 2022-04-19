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
    <p class="words col-sm">Give Us Feedback!</p> 
    <form class="contact-form" action="contactform.php" method="post">
        <div class="row">
            <input type="text" name="name" placeholder="Full name" class="col-sm">
            <input type="text" name="mail" placeholder="Your e-mail" class="col-sm">
        </div>
        <div class="row">  
            <textarea name="message" placeholder="Message" class=""></textarea>
        </div>  
        <br>
        <div class="row">
            <button type="submit" name="submit">SEND MAIL</button>
        </div>  
    </form>
</div>




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