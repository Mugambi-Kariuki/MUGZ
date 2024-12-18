<?php
$servername = "localhost: 3308";
$username = "root";
$password = "abcd";

try {
    //creating db connection
  $conn = new PDO("mysql:host=$servername;dbname=api_ex", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>