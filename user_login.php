<?php
include('login_script_for_user_login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
  header("location: user_flight_search.php");
}
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/stylesheet2.css">
  <script defer src="js/mainjs.js"></script>
</head>

<body>
<!--
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="booking_page.php">Booking</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a class="active" href="user_login.php">Login</a></li>
    <li><a href="loginform_for_admin_2.php">Admin login</a></li>
  </ul>
-->
  <?php

  $First_Name = $Last_Name = $username = $Password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First_Name = test_input($_POST["First_Name"]);
    $Last_Name = test_input($_POST["Last_Name"]);
    $username = test_input($_POST["username"]);
    $Password = test_input($_POST["Password"]);

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form method="post" action="<?php $PHP_SELF?>">
      <h1>Create Account</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#" class="social"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="#" class="social"><i class="fab fa-instagram fa-2x"></i></a>
      </div>

        <input id="FirstName" placeholder="First Name" type="first_name" name="First_Name" tabindex="1" required autofocus/>

        <input id="LastName" placeholder="Last Name" type="last_name" name="Last_Name" tabindex="2" required/>


        <input id="username" placeholder="username Address" type="username" name="username" tabindex="2" required/>


        <input id="password" placeholder="Password" type="password" name="Password" tabindex="2" required/>

        <input type="submit" name="submit" value="Register"/>
      </form>

      <?php
      include('php_files/userlogin_database.php')
      ?>

    </div>

    <div class="form-container sign-in-container">
      <form id="login" action="" method="post">
      <h1>Sign In</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="#" class="social"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="#" class="social"><i class="fab fa-instagram fa-2x"></i></a>
        </div>


        <input id="username" name="username" placeholder="Username" type="email">

        <input id="password" name="password" placeholder="Password" type="password">
        <input name="submit" type="submit" class="button7" value=" Login ">
        <span><?php echo $error; ?></span>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="js/mainjs.js"></script>
</html>
