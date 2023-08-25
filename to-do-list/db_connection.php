<?php
  $host = 'localhost';
$db_name = 'to-do-list';
$username = 'root';
$password = '';

$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

  

?>