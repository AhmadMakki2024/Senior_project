<?php
require "../conx.php";

$appid = $_GET['id'];
$stts = 2;

$sql = "UPDATE appointments SET status='$stts' WHERE appointmentID='$appid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Appointment is Rejected ');
     window.open('appointments.php','_self');
     </script>";

?>