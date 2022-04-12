<?php
  include 'header.php';
  ?>

  <h1>Test</h1>
    
    <marquee>Enhanced Performance...Faster Speeds...Higher FPS... </marquee>


    
    <div class="laptop"> 
        <a href="shop.php">
            <img src="./img/laptop-with-text.png"></a>
    </div>
    

    
    <!-- Content -->

   <div class="browse-header">
        <h1>Browse our products</h1>
    </div>
    
    <?php
        include "footer.php";
    ?> 


















    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function openCart() {
            document.getElementById("myCart").style.width = "350px";
        }

        function closeCart() {
            document.getElementById("myCart").style.width = "0";
        }

        function openLogin() {
            document.getElementById("myLogin").style.width = "350px";
        }

        function closeLogin() {
            document.getElementById("myLogin").style.width = "0";
        }

    </script>
</body>
</html>