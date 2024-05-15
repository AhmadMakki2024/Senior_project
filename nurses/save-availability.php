<?php
session_start();
require "../conx.php";
$nid = $_SESSION['nid'];

$day = $_POST['day'];
$time = $_POST['time'];
$price = $_POST['price'];

$sql_add_query = "INSERT INTO availability VALUES ('','$day','$time','$price','$nid')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Availability is Added ');
     window.open('availability.php','_self');
     </script>";

?>