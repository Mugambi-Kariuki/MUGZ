<?php 
$servername = "localhost:3308";
$username = "root";
$password = "caleb";
$dbname = "api_ex";
$port = 3308; // Specify the custom port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port = 3308);
 Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo"Successsful";
}
