<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>payment</title>
<link rel="stylesheet" type="text/css" href="css/registration_style.css">

</head>

<body>
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

<div class="col-3">
  <h1>Logo</h1>

</div>

<div class="col-9">
  <h1>Payment and confirmation Webpage</h1>

</div>

<div class="col-12">
	<ul>
  	<li><a class="active" href="index5.php">Home</a></li>
  	<li><a href="contact.php">Contact</a></li>
 		<li><a href="index5.php">About</a></li>
	</ul>
</div>

<div class="row">

<div class="container">
  <fieldset>
      <form id="registration" method="post" action="<?php $PHP_SELF?>">
      	<Legend><h1>Please fill in the form in order to register</h1></Legend>
        <Ledgend>Please fill in your details:</legend>
          <br>
          <label for="first_name">First Name: </label>
          <input placeholder="First Name" type="first_name" name="First_Name" tabindex="1" required autofocus/>
                <br>
          <label for="last_name">Last Name: </label>
          <input placeholder="Last Name" type="last_name" name="Last_Name" tabindex="2" required/>
            <br>
            <p>
          <label for="username">username Address: </label>
          <input placeholder="username Address" type="username" name="username" tabindex="2" required/>
            <br>
            <p>
          <label for="password">Password: </label>
          <input placeholder="Password" type="password" name="Password" tabindex="2" required/>
            <br>
            <p>
     <input type="submit" name="submit" value="Register" />
     <br />
     <p>Once you have registered, please go back to the login page in order to access the payment page. Please close go back to the login tab from the tab section.</p>
     </form>

    <?php
    include('php_files/registration_database.php');
    ?>

</div>

</body>
</html>
