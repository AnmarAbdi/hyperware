<?php
include 'header.php';

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