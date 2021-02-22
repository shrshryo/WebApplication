<?php
include('session_admin.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/admin_delete_record_style.css">
<title>payment</title>

</head>

<body>

<?php

$First_Name = $Last_Name = $Flight_Number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $First_Name = test_input($_POST["First_Name"]);
  $Last_Name = test_input($_POST["Last_Name"]);
  $Flight_Number = test_input($_POST["Flight_Number"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>



<div class="container">
  <fieldset>
    <form id="contact" method="post" action="<?php $PHP_SELF?>">
      <legend><h1>Please enter customer's information</h1></legend>
      <legend>First Name:</legend>
      <input placeholder="First Name" type="First_Name" name="First_Name" tabindex="1" required autofocus/>
      <br>
      <legend>Last Name:</legend>
      <input placeholder="Last Name" type="Last_Name" name="Last_Name" tabindex="1" required autofocus/>
      <br>
      <legend>Fligh Number:</legend>
      <input placeholder="Flight Number" type="Flight_Number" name="Flight_Number" tabindex="2" required/>
      <br>
      <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    include('php_files/admin_delete_record_database.php');
    ?>
  </fieldset>
</div>
</body>
</html>
