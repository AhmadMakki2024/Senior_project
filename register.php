<?php
require_once 'conx.php';
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['phone'])){
    
    $pid= uniqid (rand(1,8));

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $birthdate=$_POST['birthdate'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

    if($pass1 == $pass2){
    $sql_add_query = "INSERT INTO patients VALUES ('$pid','$fname','$lname','$address','$phone',
    '$gender','$birthdate','$pass1')";
    $result= mysqli_query($con,$sql_add_query);
     header("location:signin.php");
    }
    else {
        echo "<script>
		alert('Failed Registration! Password is not matched');
		window.open('signup.php','_self');
	</script>";
    }
}
?>

