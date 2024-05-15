<?php
require_once 'conx.php';
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['phone'])){
    
    

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $birthdate=$_POST['birthdate'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $certificate=$_POST['certificate'];
    $years=$_POST['years'];
    $college=$_POST['college'];
    $skills=$_POST['skills'];

    $profile = $_FILES['profile']['name'];
    $profileTmp = $_FILES['profile']['tmp_name'];
    move_uploaded_file($profileTmp,"nurses-profile/".$profile);


    if($pass1 == $pass2){
    $sql_add_query = "INSERT INTO nurse_applications VALUES ('','$fname','$lname','$address','$phone',
    '$gender','$birthdate','$profile','$email','$pass1','$certificate','$skills','$years','$college')";
    $result= mysqli_query($con,$sql_add_query);
     
    echo "<script>
    alert('Your application is sent successfully! We will reply to you very soon.');
    window.open('index.php','_self');
    </script>";
    }

    else{
    echo "<script>
    alert('Failed submitting the form! Password is not matched');
    window.open('apply-as-nurse.php','_self');
    </script>";
    }
}
?>

