<?php
require "../conx.php";

$name = $_POST['name'];
$description = $_POST['description'];
$yearly_price = $_POST['yearly_price'];
$monthly_price = $_POST['monthly_price'];

$img = $_FILES['img']['name'];
$imgTmp = $_FILES['img']['tmp_name'];
move_uploaded_file($imgTmp,"../insurance-img/".$img);



$sql_add_query = "INSERT INTO insurance_plans VALUES ('','$name','$description','$img','$yearly_price','$monthly_price')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Plan is Added ');
     window.open('insurance-plans.php','_self');
     </script>";

?>