<?php
//This is only displayed if the user submitted the form
if (isset($_POST['flight_search'])){
  echo "<h2>Results</h2><p>";
  //If the user did not enter a search term, they receive an error
  if ($_POST['Subject'] == ""){
    echo "<p>Please select a subject";
    exit;
  }

  // Otherwise we connect to the database
  $con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Subject = ($_POST["Subject"]);
  }

  $data = mysqli_query($con, "SELECT * FROM Contact WHERE Subject = '$Subject'");

  //And display the results

  while($row = mysqli_fetch_array( $data )) {
    echo "$row[1]". " " ."$row[2]". " " . "$row[3]". " " . "$row[4]". " ";
    echo "<br>";
  }

  //This counts the number or results. If there aren't any, it gives the user a "no match" message
  $anymatches=mysqli_num_rows($data);
  if ($anymatches == 0) {
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
