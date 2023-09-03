<?php
  $host = 'localhost';
$db_name = 'to-do-list';
$username = 'root';
$password = '';

$conn;

$conn = mysqli_connect($host, $username, $password, $db_name, '3307');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


/* <?php 
if (intval($row['task_status'] === 1)) {
  ?>
  bg-danger
<?php 
} else {
?>
  bg-success
<?php
}
?> */

  

?>