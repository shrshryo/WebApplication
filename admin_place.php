<?php
include('session_admin.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Place</title>
<link rel="stylesheet" type="text/css" href="css/admin_place_style.css">
</head>

<body>

  <?php

  $Airline = $Flight_Number = $Departure = $Arrival = $Departure_Time =
  $Arrival_Time = $Flight_Time = $Morning_AfterNoon_Night = $Price = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Airline = test_input($_POST["Airline"]);
    $Flight_Number = test_input($_POST["Flight_Number"]);
    $Departure = test_input($_POST["Departure"]);
    $Arrival = test_input($_POST["Arrival"]);
    $Departure_Time = test_input($_POST["Departure_Time"]);
    $Arrival_Time = test_input($_POST["Arrival_Time"]);
    $Flight_Time = test_input($_POST["Flight_Time"]);
    $Morning_AfterNoon_Night = test_input($_POST["Morning_AfterNoon_Night"]);
    $Price = test_input($_POST["Price"]);

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
    <li><a class="active" href="admin_place.php">Admin place</a></li>
    <li><a href="query_2.php">Customer queries</a></li>
    <li><a href="admin_delete_record.php">Deleting record</a></li>
    <li><a href="logout_admin.php">Logout</a></li>
	</ul>

  <div class="row">

<div class="container">
  <fieldset>
      <form id="contact" method="post" action="<?php $PHP_SELF?>">
      	<Legend><h1>Inserting flight information</h1></Legend>
        <Ledgend>Airline:</legend>
          <input placeholder="Airline" type="Airline" name="Airline" tabindex="1" required autofocus/>
          <br>
        <Ledgend>Flight Number:</legend>
          <input placeholder="Flight Number" type="Flight_Number" name="Flight_Number" tabindex="1" required autofocus/>
          <br>
        <Ledgend>Departure:</legend>
          <input placeholder="Departure" type="Departure" name="Departure" tabindex="2" required style="text-transform:uppercase" />
          <br>
        <Ledgend>Arrival:</legend>
          <input placeholder="Arrival" type="Arrival" name="Arrival" tabindex="2" required style="text-transform:uppercase" />
          <br>
        <Ledgend>Departure Time:</legend>
          <input placeholder="Departure Time" type="Time" name="Departure_Time" tabindex="2" required/>
          <br>
        <Ledgend>Arrival Time:</legend>
          <input placeholder="Arrival Time" type="Time" name="Arrival_Time" tabindex="2" required/>
          <br>
       <Ledgend>Flight Time:</legend>
         <input placeholder="Flight Time" type="Time" name="Flight_Time" tabindex="2" required/>
         <br>
       <Ledgend>Morning, Afternoon or Night:</legend>
        <input placeholder="Morning, Afternoon or Night" type="Morning_AfterNoon_Night" name="Morning_AfterNoon_Night" tabindex="1" required autofocus/>
        <br>
       <Ledgend>Price:</legend>
        <input placeholder="Price" type="Price" name="Price" tabindex="1" required autofocus/>
       	<br>
      <input type="submit" name="submit" value="Submit" />
     </form>

    <?php
    include('php_files/admin_place_database.php');
    ?>

</div>

</div>

</body>
</html>
