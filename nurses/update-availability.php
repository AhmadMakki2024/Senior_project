<?php
require "../conx.php";

$aid = $_GET['id'];
$day = $_POST['day'];
$time = $_POST['time'];
$price = $_POST['price'];


$sql = "UPDATE availability SET day='$day',work_time='$time',price_per_hour='$price' WHERE availabilityID='$aid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Availability is Updated ');
     window.open('availability.php','_self');
     </script>";

?>