<?php
require "../conx.php";

$rid = $_GET['id'];
$stts = 1;

$sql = "UPDATE service_requests SET status='$stts' WHERE requestID='$rid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Request is Accepted ');
     window.open('requests.php','_self');
     </script>";

?>