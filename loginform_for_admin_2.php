<?php
include('php_files/login_admin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin_place.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="css2.css">
  <link rel="stylesheet" type="text/css" href="css/loginform_for_admin_2.css">

</head>

<body>

  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="countrypage.html">Countries</a></li>
  	<li><a href="booking_page.php">Booking</a></li>
  	<li><a href="contact.php">Contact</a></li>
 		<li><a href="user_login.php">Login</a></li>
    <li><a class="active" href="loginform_for_admin_2.php">Admin login</a></li>
    <li><a href="countrypage.html">Countries</a></li>
	</ul>

  <div class="container">
    <fieldset>
      <form id="login" action="" method="post">
        <label>Username :</label>
        <input id="username" name="username" placeholder="Username" type="username">
        <label>Password :</label>
        <input id="password" name="password" placeholder="Password" type="password">
        <input name="submit" type="submit" class="button7" value=" Login ">
        <span><?php echo $error; ?></span>
      </form>
    </fieldset>
  </div>

  <!-- social media block -->
  <div class="social twitter">
    <a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
  </div>
  <div class="social instagram">
    <a href="#" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
  </div>
  <div class="social facebook">
    <a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
  </div>

</body>
</html>
