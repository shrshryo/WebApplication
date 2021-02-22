<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: loginform_for_admin_2.php"); // Redirecting To Home Page
}
?>
