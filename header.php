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
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://st.1001fonts.net/img/charmap/ttf/0/2/karmatic-arcade.regular.character-map-1.png"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="http://fonts.cdnfonts.com/css/arcade-classic" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>

    <!-- Navbar and Cart Elements -->
    <!--Nav Button-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            <h1>X</h1>
        </a>
        <a href="index.php">
            <h1>Home</h1>
        </a>
        <a href="shop.php">
            <h1>Shop</h1>
        </a>
        <a href="about.php">
            <h1>About Us</h1>
        </a>
        <a href="contact.php">
            <h1>Contact</h1>
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

    <div id="mySignup" class="sidecart">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSignup()">
            <h1>X</h1>
        </a>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and email!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
             echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
             echo '<p class="signuperror">Invalid email!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
             echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
             echo '<p class="signuperror">Username is already taken!</p>';
           }
          }
          if (isset($_GET["signup"])) {
           if ($_GET["signup"] == "success") {
           echo '<p>Signup successful!</p>'; 
          }
         }
         ?>
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="card">
                    <form action="includes/signup.inc.php" method="post">
                        <div class="form-group">
                            <input type="text" name="uid" placeholder="Username">
                            <input type="text" name="mail" placeholder="Email">
                            <input type="password" name="pwd" placeholder="Password">
                            <input type="password" name="pwd-repeat" placeholder="Repeat password">
                        </div>
                        <button type="submit" name="signup-submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Login | Signup Buttons-->
    <div class="top-bar row">
        <div class="top-two-btns">
            <span class="loginbutton" style="font-size:20px;cursor:pointer" onclick="openLogin()">
                <p class=login>Login </p>
            </span>
            <span class="signupbutton" style="font-size:20px;cursor:pointer" onclick="openSignup()">
                <p class=signup>Signup| </p>
            </span>
            <div class="message">
                <?php
                if (isset($_SESSION['userId'])) {
                echo '<p class="message">Welcome back!</p>';
                }
                else {
                echo '<p>You are logged out!</p>';
                }
            ?>
            </div>
            
        </div>

    </div>
    <!-- Nav and Cart Buttons (have to be under top bar)-->
    <span class="navbutton" style="font-size:30px;cursor:pointer" onclick="openNav()"><img
            src="https://drive.google.com/uc?export=view&id=1lrlJ-Ed3hqe17LFDfVzPH8nfNRQGgDeC" class="cart"></span>
    


    <a href="index.php">
        <img src="https://drive.google.com/uc?export=view&id=1Gl3FStpL-t5d98cNxN55G__UtpZlr5Ge" class="logo">
    </a>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        function openLogin() {
            document.getElementById("myLogin").style.width = "350px";
        }

        function closeLogin() {
            document.getElementById("myLogin").style.width = "0";
        }

        function openSignup() {
            document.getElementById("mySignup").style.width = "350px";
        }

        function closeSignup() {
            document.getElementById("mySignup").style.width = "0";
        }
    </script>