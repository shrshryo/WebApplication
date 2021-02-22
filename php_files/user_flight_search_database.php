<?php
$con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = ($_POST["firstName"]);
  $lastName = ($_POST["lastName"]);
  $email = ($_POST["email"]);
}

$data = mysqli_query($con, "SELECT * FROM Passenger_Profile WHERE First_Name = '$firstName' AND Last_Name = '$lastName' AND Email_Address = '$email' ");

$record = array();
//And display the results
while ($row = mysqli_fetch_array( $data )) {
  $record[] = $row;

  foreach ($record as $rec) {
    //echo $rec['Profile_Id'];

    $data1 = mysqli_query($con, "SELECT * FROM Ticket_Info WHERE Profile_Id = '$rec[Profile_Id]'");
    $record1 = array();
    while ($row1 = mysqli_fetch_array( $data1 )) {
      //echo $row1[Flight_Id];
      $record1[] = $row1;

      foreach ($record1 as $rec1) {
        //echo $rec[Flight_Id]."<br>";

        $data2 = mysqli_query($con, "SELECT * FROM FlightData WHERE Flight_Id = '$rec1[Flight_Id]'");
        $record2 = array();
        while ($row2 = mysqli_fetch_array( $data2 )) {
          $record2[] = $row2;
          foreach ($record2 as $rec2) {
            //echo $rec2[Airline];
            echo $rec2['Airline'] . " | " . $rec2['Flight_Number'] . " | " . $rec2['Departure'] . " | " . $rec2['Arrival'] . " | " . $rec2['Departure_Time'] . " | " . $rec2['Arrival_Time'];
            echo "<br>";
          }
        }

      }
    }

  }
}


//This counts the number or results. If there aren't any, it gives the user a "no match" message
$anymatches=mysqli_num_rows($data);
if ($anymatches == 0) {
  echo "Sorry, but we can not find an entry to match your query<br><br>";
}

//And reminds the user what they searched for
echo "<b>Searched For:</b> " . "$find";
?>
