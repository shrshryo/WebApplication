<?php
    #echo "Insert new user";
// connect to the database
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

// Check connection
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$data = mysqli_query($con, "INSERT INTO User_register (First_Name, Last_Name, username, Password)
VALUES ('$First_Name', '$Last_Name', '$username', '$Password')");
//mysql_query($sql1, $con);
mysqli_close($con);

?>
