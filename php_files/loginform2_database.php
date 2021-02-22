<?php

session_start();
if (isset($_POST['username'])) {
  $username_value = $_POST['username'];
  $_SESSION['username'] = $username_value;
}

session_start();
if (isset($_POST['password'])) {
  $password_value = $_POST['password'];
  $_SESSION['password'] = $password_value;
}

$var_value = $_GET['Flight_Id'];
echo "Your flight ID is ".$var_value."." ;

session_start();
if (isset($_GET['Flight_Id'])) {
  $Flight_Id = $_GET['Flight_Id'];
  $_SESSION['Flight_Id'] = $Flight_Id;
}

?>
