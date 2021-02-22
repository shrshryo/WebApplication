<?php
include('session_for_user_login.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Query Search Up Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/user_flight_search_style.css">
</head>

<body>
  <?php
  $Subject = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Subject = test_input($_POST["Subject"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="countrypage.html">Countries</a></li>
  	<li><a href="booking_page.php">Booking</a></li>
  	<li><a href="contact.php">Contact</a></li>
  	<li><a class="active" href="user_login.php">Login</a></li>
    <li><a href="loginform_for_admin_2.php">Admin login</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
  </ul>

  <div class="container">
    <fieldset>
      <form id="search" method="post" action="<?php $PHP_SELF?>">
        <legend>
          <h1>Searching customer queries</h1>
        </legend>
        <legend>Please select your subject:</legend>
        <label for="firstName">First Name: </label>
        <input placeholder="First Name" type="firstName" name="firstName" tabindex="1" required autofocus/>
        <label for="lastName">Last Name: </label>
        <input placeholder="Last Name" type="lastName" name="lastName" tabindex="1" required autofocus/>
        <label for="email">Email: </label>
        <input placeholder="Email" type="email" name="email" tabindex="1" required autofocus/>
        <input type="hidden" name="flights" value="yes" />
        <input type="submit" name="submit" class="button7" value="Search" />
      </form>
      <?php
      include('php_files/user_flight_search_database.php')
      ?>
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
