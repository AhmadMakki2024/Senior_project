<?php
session_start();
require_once "../conx.php";
$pid = $_SESSION['pid'];

$nid = $_GET['id'];


$aid= $_POST['availability'];

$date = $_POST['date'];

$coming_time = $_POST['coming_time'];


$result = mysqli_query($con,"SELECT * FROM availability WHERE availabilityID='$aid'");
$row = mysqli_fetch_array($result);
$day = $row['day'];

$dayOfWeek = date('l', strtotime($date));
                    
if($dayOfWeek == $day){
    $stts = 0;
$sql_add_query = "INSERT INTO appointments VALUES ('','$date','$coming_time','$nid','$pid','$aid','$stts')";
$result= mysqli_query($con,$sql_add_query);

     echo "<script>
    alert('Your appointment request is submitted!');
    window.open('appointments.php','_self');
    </script>";
     
}

else{
    echo "<script>
    alert('You must choose date in $day.');
    window.open('request-appointment.php?id=$nid','_self');
    </script>";
        }

?>