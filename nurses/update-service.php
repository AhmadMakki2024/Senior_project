<?php
require "../conx.php";

$sid = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "UPDATE services SET name='$name',description='$description',price='$price' 
WHERE serviceID='$sid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Service is Updated ');
     window.open('services.php','_self');
     </script>";

?>