<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

// Check connection
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
// Selecting Database
$db = mysqli_select_db($con, "Airline_Booking");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($con, "SELECT username FROM User_register WHERE username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($con); // Closing Connection
header('Location: user_flight_search.php'); // Redirecting To Payment Page
}
?>
