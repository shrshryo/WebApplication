<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
  header("location: payment1.php");
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Payment</title>
  <link rel="stylesheet" type="text/css" href="css2.css">
  <style>

  #login input[type="username"],
  #login input[type="password"],
  #login button[type="submit"] {
    font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
  }

  #login {
    background: #F9F9F9;
    padding: 25px;
    margin: 15px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  #login h3 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 10px;
  }

  #login h4 {
    margin: 5px 0 15px;
    display: block;
    font-size: 13px;
    font-weight: 400;
  }

  fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
  }

  #login input[type="username"],
  #login input[type="password"] {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
  }

  #login input[type="username"]:hover,
  #login input[type="password"]:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #aaa;
  }

  #login textarea {
    height: 100px;
    max-width: 100%;
    resize: none;
  }

  #login button[type="submit"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #4CAF50;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 20px;
  }

  #login button[type="submit"]:hover {
    background: #43A047;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
  }

  #login button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
  }

  #login input:focus,
  #login textarea:focus {
    outline: 0;
    border: 1px solid #aaa;

  }

  ::-webkit-input-placeholder {
    color: #888;
  }

  :-moz-placeholder {
    color: #888;
  }

  ::-moz-placeholder {
    color: #888;
  }

  :-ms-input-placeholder {
    color: #888;
  }

  </style>
</head>

<body>

  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="countrypage.html">Countries</a></li>
  	<li><a class="active" href="booking_page.php">Booking</a></li>
  	<li><a href="contact.php">Contact</a></li>
 		<li><a href="loginform_user_2.php">Login</a></li>
    <li><a href="loginform_for_admin_2.php">Admin login</a></li>
	</ul>

  <div class="row">

    <div class="container">
      <fieldset>
        <form id="login" action="" method="post">
          <label>Username:</label>
          <input id="username" name="username" placeholder="Username" type="username">
          <label>Password:</label>
          <input id="password" name="password" placeholder="Password" type="password">
          <input name="submit" type="submit" class="button7" value="Login">
          <span><?php echo $error; ?></span>
        </form>
        <?php
        // $con = mysqli_connect(localhost,root, root, Airline_Booking, 8889);
        //
        // // Check connection
        // if (mysqli_connect_errno()){
        //   echo "Failed to connect to MySQL: " . mysqli_connect_error();
        // }
        //
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //   $username = ($_POST["username"]);
        //   $password = ($_POST["password"]);
        // }
        //
        // $data = mysqli_query($con, "SELECT MemberID FROM User_register WHERE username = '$username' AND password = '$password' ");
        // MemberID = $row[0]

        // if (isset($_GET['MemberID'])) {
        //   $MemberID = $_GET['MemberID'];
        //   echo $MemberID;
        // }
        // session_start();
        // if (isset($_GET['MemberID'])) {
        //   $MemberID = $_GET['MemberID'];
        //   $_SESSION['MemberID'] = $MemberID;
        // }

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

        <h3><legend>Register</legend></h3>
        <label>If you do not have username and password, please register by clicking</label>
        <a href="registration.php" class="button7" target="_blank">Register</a>
        <!-- <p>If you do not have username and password, please register by clicking
          <a href="registration.php" class="button7" target="_blank">Register</a> -->
      </fieldset>
    </div>
  </div>
</body>
</html>
