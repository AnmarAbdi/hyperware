<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Order Flatiron Grille, Order food Jackson, Flatiron takeout, Flatiron carryout, Flatiron to-go, Flatiron pickup, Order food near me, Flatiron Grille pickup, order American dining, Flatiron Grille to-go, Flatiron Grille carryout, Flatiron Grille takeout, Flatiron phone number, Flatiron location, Flatiron Grille phone number, Flatiron Grille location, Flatiron Grille hours, Flatiron Instagram, Flatiron Facebook, Flatiron Grille Instagram, Flatiron Grille Facebook">
    <meta name="author" content="BMDBTMBMM, Christian Wilcox, Michael Crockett, Shrey Patel">
    <meta name="description" content="This page allows the user to order anything off the food menu for pickup.">
    <title>Test Shop Page with cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
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
    <main>
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
        </div>

    </div>
    <!-- Nav and Cart Buttons (have to be under top bar)-->
    <span class="navbutton" style="font-size:30px;cursor:pointer" onclick="openNav()"><img
            src="https://drive.google.com/uc?export=view&id=1lrlJ-Ed3hqe17LFDfVzPH8nfNRQGgDeC" class="cart"></span>
    <span class="cartbutton" style="font-size:30px;cursor:pointer" onclick="openCart()"><img
            src="https://drive.google.com/uc?export=view&id=1kv-hc0BQ4t4P4mKXN5xntrcvjt3DH9t5" class="cart"></span>


    <a href="index.php">
        <img src="https://drive.google.com/uc?export=view&id=1Gl3FStpL-t5d98cNxN55G__UtpZlr5Ge" class="logo">
    </a>


        <!--Cart Button-->
        <div id="cart-button">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                aria-controls="offcanvasCart">
                <img
            src="https://drive.google.com/uc?export=view&id=1kv-hc0BQ4t4P4mKXN5xntrcvjt3DH9t5" class="cart"></span>
            </button>
            <span id="cart-counter" class="badge bg-secondary">1</span>
        </div>



        <!--Menu-->
        <div class="container-fluid menu" id="order-menu">
            <div class="row gx-5 justify-content-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Appetizers</h4>
                                <ul class="card-text">
                                    <li>
                                        <div class="row">
                                            <div class="col menu-item" id="item1">RAM</div>
                                            <div class="col menu-price" id="price1">$9</div>
                                        </div>
                                        <div class="row">
                                            <p>Super Fast RAM YAY</p>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary" onclick="addItem(1)">Add
                                                    to Order</button>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="row">Hard Drive!</div>
                                            <div class="col menu-price" id="price2">$9</div>
                                        </div>
                                        <div class="row">
                                            <p>More Space!</p>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary" onclick="addItem(2)">Add
                                                    to Order</button>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="row">
                                            <div class="col menu-item" id="item3">GPU Power</div>
                                            <div class="col menu-price" id="price3">$15</div>
                                        </div>
                                        <div class="row">
                                            <p>Everything runs so smooth!</p>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary" onclick="addItem(3)">Add
                                                    to Order</button>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--OffCanvas-->
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasCartLabel">Your Cart</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <table class="table" id="order"></table>
                <div class="container-fluid">
                    <div class="row">
                        <p class="total">Total: <span id="cart-total"></span></p>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="clearAll()">Clear</button>
                <span id="deletePopover" class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                    data-bs-trigger="focus" data-bs-placement="bottom" title="Click or Tap Items to Delete"
                    data-bs-content="Click or tap the items you would like to remove, then click this button again.">
                    <button id="deleteButton" type="button" class="btn btn-primary" data-bs-toggle="button"
                        autocomplete="off" onclick="toggleDelete()"><i class="fas fa-trash"></i></button>
                </span>

            </div>
        </div>
    </main>
    
    <?php
        include "footer.php";
    ?>

    <script src="js\bootstrap.bundle.min.js">
    </script>
    <script src="js\cart.js"></script>
    <script src="js\main.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
