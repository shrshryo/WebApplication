<?php
include('session_admin.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Query Search Up Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/query_2_style.css">

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
    <li><a href="index1.php">Home</a></li>
    <li><a href="countrypage.html">Countries</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="index1.php">About</a></li>
    <li><a href="loginform_for_admin_2.php">Admin place</a></li>
    <li><a class="active" href="query_2.php">Customer queries</a></li>
    <li><a href="admin_delete_record.php">Deleting record</a></li>
    <li><a href="logout_admin.php">Logout</a></li>
  </ul>


  <div class="container">
    <fieldset>
      <form id="search" method="post" action="<?php $PHP_SELF?>">
        <legend>
          <h1>Searching customer queries</h1>
        </legend>
        <legend>Please select your subject:</legend>
        <select name="Subject">
          <option value="Reporting problems in the website">Reporting problems in the website</option>
          <option value="Questions, queries and problems using the website">Questions, queries and problems using the website</option>
          <option value="Request">Request in the website</option>
          <option value="Cancelling a flight">Cancelling a flight</option>
        </select>
        <input type="hidden" name="flight_search" value="yes" />
        <input type="submit" name="submit" class="button7" value="Search" />
      </form>
    </fieldset>
    <?php
    include('php_files/query_2_database.php');
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
