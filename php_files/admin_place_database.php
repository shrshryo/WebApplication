<?php
    #echo "Insert new user";
// connect to the database
$con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

// Check connection
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$Departure = strtoupper($_POST['Departure']);
$Arrival = strtoupper($_POST['Arrival']);

$data = mysqli_query($con, "INSERT INTO FlightData (Airline, Flight_Number, Departure, Arrival,
  Departure_Time, Arrival_Time, Flight_Time, Morning_AfterNoon_Night, Price)
VALUES ('$Airline', '$Flight_Number', '$Departure', '$Arrival', '$Departure_Time', '$Arrival_Time',
  '$Flight_Time', '$Morning_AfterNoon_Night', '$Price')");

mysqli_close($con);
?>
