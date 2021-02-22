<?php
    #echo "Insert new user";
// connect to the database
//$con = mysqli_connect(localhost,root, root, Airline_Booking, 8889);
$con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$data = mysqli_query($con, "SELECT Passenger_Id FROM Passenger_Profile WHERE First_Name = '$First_Name' AND Last_Name = '$Last_Name' AND Flight_Number = '$Flight_Number'");

$data = mysqli_query($con, "SELECT Profile_Id FROM Passenger_Profile WHERE First_Name = '$First_Name' AND Last_Name = '$Last_Name'");
//And display the results
while($row = mysqli_fetch_array( $data )) {
 // echo "$row[0]". " ";
 // echo "<br>";
 $Profile_Id = $row[0];
 echo $Profile_Id;
}

$data2 = mysqli_query($con, "SELECT Flight_Id FROM FlightData WHERE Flight_Number = '$Flight_Number'");
while($row2 = mysqli_fetch_array( $data2 )) {
 // echo "$row[0]". " ";
 // echo "<br>";
 $Flight_Id = $row2[0];
 echo $Flight_Id;
}

//This counts the number or results. If there aren't any, it gives the user a "no match" message
$anymatches=mysqli_num_rows($data);
if ($anymatches == 0) {
 echo "Sorry, but we can not find an entry to match your query<br><br>";
}

$data4 = mysqli_query($con, "DELETE FROM Ticket_Info WHERE Profile_Id = '$Profile_Id' AND Flight_Id = '$Flight_Id'");
if (mysqli_query($con, $data4)) {
   echo "Record deleted successfully";
}
else {
 echo "Error deleting record: " . mysqli_error($con);
}

//sql to delete a record
$data3 = mysqli_query($con, "DELETE FROM Passenger_Profile WHERE Profile_Id = '$Profile_Id'");
if (mysqli_query($con, $data3)) {
   echo "Record deleted successfully";
}
else {
 echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?>
