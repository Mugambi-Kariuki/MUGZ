<?php
$servername = "localhost:3308";
$username = "root";
$password = "caleb";
$dbname = "api_ex";

try {
  $conn = new PDO("mysql:host=$servername;dbname=api_ex", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO student ( fname, sname, email)
  VALUES ('Caleb', 'Mugambi', 'caleb.kariuki@strahmore.edu')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn=null;
?>
