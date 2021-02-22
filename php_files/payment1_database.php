<?php
// Otherwise we connect to the database
$con1 = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$flight_data = mysqli_query($con1, "SELECT * FROM FlightData WHERE Flight_Id = '$Flight_Id' ");

//And display the results

while($row = mysqli_fetch_array( $flight_data )) {
  echo "$row[1]". " | " ."$row[2]". " | " . "$row[3]". " | " . "$row[4]". " | " . "$row[5]". " | " . "$row[6]". " | " . "$row[7]". " | " . "$row[8]". " | " . "$row[9]" . " ";
  echo "<br>";
}
$anymatches=mysqli_num_rows($flight_data);
if ($anymatches == 0){
  echo "Sorry, but we can not find an entry to match your query<br><br>";
}
mysqli_close($con1);
?>
<br>
<input type="submit" name="submit" value="Submit" />
</form>

<?php
#echo "Insert new user";
// connect to the database

$con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Returning the id that was inserted

$data1 = mysqli_query($con, "INSERT INTO Passenger_Profile (First_Name, Last_Name, Email_Address, Card_Type,
Card_Number, Security_Code, Expiration_Month_Year, Passport_Number, Phone_Number, Home_Address)
VALUES ('$First_Name', '$Last_Name', '$Email_Address', '$Card_Type', '$Card_Number', '$Security_Code',
'$Expiration_Month_Year', '$Passport_Number', '$Phone_Number', '$Home_Address')");

//Returning the id that was inserted
$last_id = mysqli_insert_id($con);
$data2 = mysqli_query($con, "INSERT INTO Ticket_Info (Profile_Id, Flight_Id, First_Name, Last_Name)
VALUES ('$last_id', '$Flight_Id', '$First_Name', '$Last_Name')");
echo $last_id;

mysqli_close($con);

?>
