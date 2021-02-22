<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>index</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css2.css">
  <script defer src="mainjs.js"></script>

  <style>
  .container {
    max-width: 600px;
    margin: 0 auto;
    position: relative;
  }

  #search input[type="departure"],
  #search input[type="arrival"],
  #search input[type="class"],
  #search input[type="date"],
  #search input[type="date"],
  #search input[type="filters"],
  #search button[type="submit"] {
    font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
  }

  #search {
    background: #F9F9F9;
    padding: 25px;
    margin: 15px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  #search h3 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 10px;
  }

  #search h4 {
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

  #search input[type="departure"],
  #search input[type="arrival"],
  #search input[type="class"],
  #search input[type="date"],
  #search input[type="date"],
  #search input[type="filters"] {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
  }

  #search input[type="departure"]:hover,
  #search input[type="arrival"]:hover,
  #search input[type="class"],
  #search input[type="date"]:hover,
  #search input[type="date"]:hover,
  #search input[type="filters"]:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #aaa;
  }

  #search button[type="submit"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #4CAF50;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 20px;
  }

  #search button[type="submit"]:hover {
    background: #43A047;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
  }

  #search button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
  }

  #search input:focus,
  #search textarea:focus {
    outline: 0;
    border: 1px solid #aaa;
  }

  </style>

</head>

<body>

	<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="countrypage.html">Countries</a></li>
  	<li><a class="active" href="booking_page.php">Booking</a></li>
  	<li><a href="contact.php">Contact</a></li>
    <li><a href="user_login.php">Login</a></li>
    <li><a href="loginform_for_admin_2.php">Admin login</a></li>
    <li><a href="countrypage.html">Countries</a></li>
	</ul>

  <div class="row">
    <div class="container">
      <fieldset>
        <form id="search" method="post" action="<?php $PHP_SELF?>">
          <legend><h1>You may search your flights details</h1></legend>
          <legend>Please enter your departure and arrival point:</legend>
          <br>
          <label for="departure">departure: </label>
          <input id="departure" placeholder="departure" type="departure" name="departure" tabindex="1" required autofocus style="text-transform:uppercase" />
          <br>
          <label for="arrival">arrival: </label>
          <input id="arrival" placeholder="arrival" type="arrival" name="arrival" tabindex="2" required required autofocus style="text-transform:uppercase" />
          <br>
          <legend>Please select your class:</legend>
          <select>
            <option type="class" value="economy">Economy</option>
            <option type="class" value="business">Business</option>
            <option type="class" value="first">First</option>
          </select>
          <br>
          <legend>Please select your date:</legend>
          <label for="start">Start: </label>
          <input type="date" id="start" name="trip_going" value="yyyy-mm-dd" min="2018-01-01" max="9000-12-21" />
          <br>
          <label for="end">End: </label>
          <input type="date" id="end" name="trip_back" value="yyyy-mm-dd" min="2018-01-01" max="9000-12-21" />
          <br>
          <legend>Filter:</legend>
          <input type="checkbox" name="check_list[]" value="Morning"><label>Morning</label><br/>
          <input type="checkbox" name="check_list[]" value="Afternoon"><label>Afternoon</label><br/>
          <input type="checkbox" name="check_list[]" value="Night"><label>Night</label><br/>

          <!-- <legend>Cost filter:</legend>
          <input type="radio" name="radio_list[]" value="htolcost"><label>Hight to low cost</label><br/>
          <input type="radio" name="radio_list[]" value="ltohcost"><label>Low to high cost</label><br/> -->

          <!-- <input type="radio" name="cost_order_high_to_low" value="TRUE" checked>TRUE
          <input type="radio" name="cost_order_high_to_low"　value="FALSE">FALSE

          <input type="radio" name="cost_order_low_to_high" value="TRUE" checked>TRUE
          <input type="radio" name="cost_order_low_to_high"　value="FALSE">FALSE -->

          <legend>Cost Filter</legend>
          <input name="radio" type="radio" value="htolcost">Hight to low cost
          <br>
          <input name="radio" type="radio" value="ltohcost">Low to high cost
          <br>
          <input type="hidden" name="flight_search" value="yes" />
          <input type="submit" name="submit" class="button7" value="Search" />
        </form>

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

          //echo "$departure";
          //echo "$arrival";

          //Now we search for our search term, in the field the user specified
          //if Morning_AfterNoon_Night = Morning
          //$data = mysqli_query($con, "SELECT * FROM FlightData WHERE departure = '$departure' AND arrival = '$arrival'");
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

          //$a = $a . ")";

          if(isset($_POST['radio'])){
            echo "You have selected :".$_POST['radio'];
          }
          if ($_POST['radio'] === 'htolcost'){
            $order = " ORDER BY Price DESC" ;
          }
          else {
            $order = " ORDER BY Price" ;
          }

          //echo "SELECT * FROM FlightData WHERE departure = '$departure' AND arrival = '$arrival' " . "$a";
          //$data = mysqli_query($con, "SELECT * FROM FlightData WHERE departure = '$departure' AND arrival = '$arrival'");

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



      </fieldset>
    </div>
  
  </div>
</body>
</html>
