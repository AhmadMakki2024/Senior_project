<?php
session_start();
require "../conx.php";
$nid = $_SESSION['nid'];

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];


$sql_add_query = "INSERT INTO services VALUES ('','$name','$description','$price','$nid')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Service is Added ');
     window.open('services.php','_self');
     </script>";

?>