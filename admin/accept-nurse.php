<?php
require "../conx.php";
$appid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM nurse_applications WHERE applicationID='$appid'");
$row = mysqli_fetch_array($result);

$nid = uniqid (rand(1,8));

$fname=$row['first_name'];
$lname=$row['last_name'];
$gender=$row['gender'];
$birthdate=$row['birthdate'];
$address=$row['address'];
$phone=$row['phone'];
$pass=$row['password'];
$email = $row['email'];
$college = $row['college'];
$certificate = $row['certificate'];
$skills = $row['skills'];
$years_of_experience = $row['years_of_experience'];
$profile = $row['profile'];

$sql_add_query = "INSERT INTO nurses VALUES ('$nid','$fname','$lname',
'$gender','$birthdate','$profile','$address','$email','$phone',
'$pass','$certificate','$college','$years_of_experience','$skills')";
$result= mysqli_query($con,$sql_add_query);

$sql="DELETE FROM nurse_applications WHERE applicationID='$appid'";
	 $con->query($sql);


     echo "<script>
     alert('Nurse is Accepted! ');
     window.open('nurses.php','_self');
     </script>";
?>