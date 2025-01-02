<?php

require_once "dbconnect.php";

$sql = "select * from  api_ex";

$stmt = $conn->query($sql);

