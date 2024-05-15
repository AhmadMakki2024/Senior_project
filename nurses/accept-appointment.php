<?php
require "../conx.php";

$appid = $_GET['id'];
$stts = 1;

$sql = "UPDATE appointments SET status='$stts' WHERE appointmentID='$appid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Appointment is Accepted ');
     window.open('appointments.php','_self');
     </script>";

?>