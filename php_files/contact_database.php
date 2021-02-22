<?php
  if(isset($_POST['submit'])){
  $selected_val = $_POST['Subject'];  // Storing Selected Value In Variable
  echo "You have selected :" .$selected_val;  // Displaying Selected Value
  }
?>

<?php
// connect to the database
$con = mysqli_connect("anysql.itcollege.ee", "WT16", "iLtQlUerkT", "WT16");

// Check connection
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$data = mysqli_query($con, "INSERT INTO Contact (Contact_Name, Email, Subject, Message)
VALUES ('$Contact_Name', '$Email', '$Subject', '$Message')");

mysqli_close($con);

?>
