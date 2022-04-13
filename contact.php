<?php
  include 'header.php';
  ?>
    <h1 class="large-h1">Contact</h1>
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
        <p class="words">SEND E-MAIL</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your e-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">SEND MAIL</button>
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