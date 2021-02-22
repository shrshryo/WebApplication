<?php
//This is only displayed if the user submitted the form
if (isset($_POST['flight_search'])){
  echo "<h2>Results</h2><p>";

  //If the user did not enter a search term, they receive an error
  if ($_POST['departure'] and $_POST['arrival']== ""){
    echo "<p>Please enter a search term";
    exit;
  }

  // Otherwise we connect to the database
  $con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $departure = ($_POST["departure"]);
    $arrival = ($_POST["arrival"]);
    $date_going = ($_POST["trip_going"]);
    $date_back = ($_POST["trip_back"]);
  }

  //Now we search for our search term, in the field the user specified
  $int = 0;
  foreach ($_POST['check_list'] as $select){
    if ($int > 0){
      $filter = $filter . " or Morning_AfterNoon_Night ='" . $select . "'" ;
    }
    else {
      $filter = " and Morning_AfterNoon_Night ='" . $select . "'" ;
    }
    $int = $int + 1;
  }


  if(isset($_POST['radio'])){
    echo "You have selected :".$_POST['radio'];
  }
  if ($_POST['radio'] === 'htolcost'){
    $order = " ORDER BY Price DESC" ;
  }
  else {
    $order = " ORDER BY Price" ;
  }


  $data = mysqli_query($con, "SELECT * FROM FlightData WHERE departure = '$departure' AND arrival = '$arrival' " . "$filter" . "$order");
  //And display the results

  while($row = mysqli_fetch_array( $data )){
    echo "$row[1]". " " ."$row[2]". " " . "$row[3]". " " . "$row[4]". " " . "$row[5]". " " . "$row[6]". " " . "$row[7]". " " . "$row[8]". " " . "$row[9]" . " " . "$date_going". " " . "$date_back". " " ."<a href='loginform2.php?Flight_Id=$row[0]' >". "SELECT" ."</a>";
    echo "<br>";
  }

  //This counts the number or results. If there aren't any, it gives the user a "no match" message
  $anymatches=mysqli_num_rows($data);
  if ($anymatches == 0){
    echo "Sorry, but we can not find an entry to match your query<br><br>";
  }

  //And reminds the user what they searched for
  echo "<b>Searched For:</b> " . "$find";
}

//break;

if (isset($_GET['Flight_Id#'])) {
  $Flight_Id = $_GET['Flight_Id'];
  echo $Flight_Id;
}

?>
