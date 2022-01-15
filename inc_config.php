<?php 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodona_mood7044";

// Create connection
$conn = mysql_connect($servername, $username, $password);
$con2=mysql_select_db($dbname, $conn);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
} 

?>