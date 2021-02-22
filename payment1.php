<?php
include('session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Payment</title>
  <link rel="stylesheet" type="text/css" href="css2.css">
  <link rel="stylesheet" type="text/css" href="css/payment1_style.css">

</head>

<body>
  <?php

  $First_Name = $Last_Name = $Email_Address = $Card_Type = $Card_Number = $Security_Code = $Expiration_Month_Year = $Passport_Number = $Phone_Number = $Home_Address = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First_Name = test_input($_POST["First_Name"]);
    $Last_Name = test_input($_POST["Last_Name"]);
    $Email_Address = test_input($_POST["Email_Address"]);
    $Card_Type = test_input($_POST["Card_Type"]);
    $Card_Number = test_input($_POST["Card_Number"]);
    $Security_Code = test_input($_POST["Security_Code"]);
    $Expiration_Month_Year = test_input($_POST["Expiration_Month_Year"]);
    $Passport_Number = test_input($_POST["Passport_Number"]);
    $Phone_Number = test_input($_POST["Phone_Number"]);
    $Home_Address = test_input($_POST["Home_Address"]);

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
  	<li><a class="active" href="booking_page.php">Booking</a></li>
  	<li><a href="contact.php">Contact</a></li>
  	<li><a href="user_login.php">Login</a></li>
    <li><a href="loginform_for_admin_2.php">Admin login</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
  </ul>

  <div class="row">
    <div class="container">
      <fieldset>
        <form id="contact" method="post" action="<?php $PHP_SELF?>">
          <legend><h1>Please fill in the form in order to complete your purchase</h1></legend>
          <?php
          session_start();
          $Flight_Id = $_SESSION['Flight_Id'];

          //session_start();
          $username_value = $_SESSION['username'];

          //session_start();
          $password_value = $_SESSION['password'];

          $con2 = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

          if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $memberData = mysqli_query($con2, "SELECT * FROM User_register WHERE username = '$username_value' AND password = '$password_value' ");

          while($row = mysqli_fetch_array( $memberData )) {
            $ID = $row[0];

          }
          mysqli_close($con2);
          ?>
          <legend>Please enter your first and last name:</legend>
          <br>
          <label for="first_name">First Name: </label>
          <input placeholder="First Name" type="first_name" name="First_Name" tabindex="1" required autofocus/>
          <br>
          <label for="last_name">Last Name: </label>
          <input placeholder="Last Name" type="last_name" name="Last_Name" tabindex="2" required/>
          <br>
          <label for="email Address">Email Address: </label>
          <input placeholder="Email Address" type="email" name="Email_Address" tabindex="2" required/>
          <br>
          <label for="card_type">Please enter your card type <b> e.g such as Visa Card, Master Card, American Express etc... </b></label>
          <input placeholder="Card Type" type="card_type" name="Card_Type" tabindex="2" required/>
          <br>
          <label for="card_number">Card Number: </label>
          <input placeholder="Card Number" type="card_number" name="Card_Number" tabindex="1" required autofocus/>
          <br>
          <label for="security_code">Security Code: </label>
          <input placeholder="Security Code" type="security_code" name="Security_Code" tabindex="1" required autofocus/>
          <br>
          <legend>Please enter your expiary month and date of your card. *<b>Please leave the date section as 01</b>*:</legend>
          <label for="date">Expiary month and year: </label>
          <input type="date" id="Expiration_Month_Year" name="Expiration_Month_Year" value="yyyy-mm-dd" min="2018-01-01" max="9000-12-21"/>
          <br>
          <label for="passport">Passport Number: </label>
          <input placeholder="Passport Number" type="passport" name="Passport_Number" tabindex="1" required autofocus/>
          <br>
          <label for="phone_number">Phone Number: </label>
          <input placeholder="Phone Number" type="phone_number" name="Phone_Number" tabindex="1" required autofocus/>
          <br>
          <label for="textarea">Home Address: </label>
          <textarea placeholder="Please type in your home address" name="Home_Address" tabindex="5" required></textarea>
          <br>
          <p>Please confirm your order. If you would like to cancel the order please click on the "Logout" button on the top right hand corner.</p>
          <?php
          include('php_files/payment1_database.php');
          ?>

      </fieldset>
    </div>
  </div>
</body>
</html>
