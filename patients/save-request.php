<?php
session_start();
require_once "../conx.php";
$pid = $_SESSION['pid'];

$nid = $_GET['id'];

$sid= $_POST['service'];

$date = $_POST['date'];

$time = $_POST['time'];

$stts = 0;

$sql_add_query = "INSERT INTO service_requests VALUES ('','$date','$time','$nid','$pid','$sid','$stts')";
$result= mysqli_query($con,$sql_add_query);

     echo "<script>
    alert('Your request is submitted!');
    window.open('requests.php','_self');
    </script>";
     
?>