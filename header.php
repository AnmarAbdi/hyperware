<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>HyperWare</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
    <!-- Constants Throughout Website -->
        <!-- Navbar and Cart Elements -->
    <!--Nav Button-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            <h1>X</h1>
        </a>
        <a href="index.php">
            <h1>Home</h1>
        </a>
        <a href="test.php">
            <h1>Test</h1>
        </a>
        <a href="contact.php">
            <h1>Contact</h1>
        </a>
        <a href="about.php">
            <h1>About Us</h1>
        </a>
        <a href="shop.php">
            <h1>Shop</h1>
        </a>
    </div>
    <!--Cart Button-->
    <div id="myCart" class="sidecart">
        <a href="javascript:void(0)" class="closebtn" onclick="closeCart()">
            <h1>X</h1>
        </a>
        <a href="#">
            <h1>Your Cart</h1>
        </a>
    </div>
<!-- Top Bar Elements -->
    <!--Login Button-->
    
    <div id="myLogin" class="sidecart">
        <a href="javascript:void(0)" class="closebtn" onclick="closeLogin()">
            <h1>X</h1>
        </a>
        <a href="#">
            <h1>Username</h1>
        </a>
        <a href="#">
            <h1>Password</h1>
        </a>
    </div>
    <!--Login | Signup Buttons-->
    <div class="top-bar row">
        <div class="top-two-btns col-8">
        
      <p class="game"><button class="game">Click here to play game!</button></p>
</div>
<div class="top-two-btns col-4">  
      <?php
        if (isset($_SESSION['userId'])) {
          echo '<form action="includes/logout.inc.php" method="post">
          <button class="btn btn-outline-info" type="submit" name="logout-submit">Logout</button>
      </form>';
        }
        else {
          echo '<form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/Email">
          <input type="password" name="pwd" placeholder="Password">
          <button class="btn btn-outline-info" type="submit" name="login-submit">Login</button>
      </form>
      <a href="signup.php" class="btn btn-outline-info">Signup</a>';
        }
      ?>
        </div>
        
    </div>
    <!-- Nav and Cart Buttons (have to be under top bar)-->
    <span class="navbutton" style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="./img/nav.png"
        class="cart"></span>
    <span class="cartbutton" style="font-size:30px;cursor:pointer" onclick="openCart()"><img src="./img/cart.png"
        class="cart"></span>
        
        <img src="./img/logo.png" class="logo">

       