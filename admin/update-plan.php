<?php
require "../conx.php";

$planid = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$yearly_price = $_POST['yearly_price'];
$monthly_price = $_POST['monthly_price'];

$sql = "UPDATE insurance_plans SET name='$name',description='$description',
yearly_price='$yearly_price', monthly_price='$monthly_price'
WHERE planID='$planid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Plan is Updated ');
     window.open('insurance-plans.php','_self');
     </script>";

?>