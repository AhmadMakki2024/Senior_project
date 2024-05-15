<?php
session_start();
require "../conx.php";
$pid = $_SESSION['pid'];

$price_method = $_POST['price_method'];
$payment_method = $_POST['payment_method'];



$planid = $_GET['id'];


$sql_add_query = "INSERT INTO subscriptions VALUES ('','$price_method','$payment_method',
'$planid','$pid')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Thank you for Subscribe in our insurance plan! ');
     window.open('insurance-plans.php','_self');
     </script>";

?>