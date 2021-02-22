<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Contact</title>
  <link rel="stylesheet" type="text/css" href="css2.css">
  <link rel="stylesheet" type="text/css" href="css/contact_style.css">

</head>

<body>
  <!-- <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
    </script> -->

  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="countrypage.html">Countries</a></li>
    <li><a href="booking_page.php">Booking</a></li>
    <li><a class="active" href="contact.php">Contact</a></li>
    <li><a href="user_login.php">Login</a></li>
    <li><a href="loginform_for_admin_2.php">Admin login</a></li>
    <li><a href="countrypage.html">Countries</a></li>
  </ul>

  <?php

  $Contact_Name = $Email = $Subject = $Message = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Contact_Name = test_input($_POST["Contact_Name"]);
    $Email = test_input($_POST["Email"]);
    $Subject = test_input($_POST["Subject"]);
    $Message = test_input($_POST["Message"]);

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

  <div class="row">
    <div class="container">
      <fieldset>
        <form id="contact" action="" method="post">
          <h3>Contact</h3>
          <fieldset>
            <label for="Contact_Name">Please enter your name: </label>
            <input placeholder="Your name" type="text" name="Contact_Name" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <label for="Email">Please enter your email address: </label>
            <input placeholder="Your Email Address" type="email" name="Email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <legend>Please select your subject:</legend>
            <select name="Subject">
              <option value="Reporting problems in the website">Reporting problems in the website</option>
              <option value="Questions, queries and problems using the website">Questions, queries and problems using the website</option>
              <option value="Request">Request in the website</option>
              <option value="Cancelling a flight">Cancelling a flight</option>
            </select>
          </fieldset>
          <fieldset>
            <legend>Please type in your message:</legend>
            <textarea placeholder="Type your message here...." name="Message" tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" class="button7" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
      </fieldset>
    </div>

    <?php
      if(isset($_POST['submit'])){
      $selected_val = $_POST['Subject'];  // Storing Selected Value In Variable
      echo "You have selected :" .$selected_val;  // Displaying Selected Value
      }
    ?>

    <?php
    include("php_files/contact_database.php");
    ?>
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
