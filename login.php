<?php
session_start();
require_once 'conx.php';

if (isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $queryP="select * from patients where phone='".$username."' AND password='".$password."'";

    $queryA="select * from admin where email='".$username."' AND password='".$password."'";

    $queryN="select * from nurses where email='".$username."' AND password='".$password."'";
    
    $resultP= mysqli_query($con,$queryP);
    $resultA= mysqli_query($con,$queryA);
    $resultN= mysqli_query($con,$queryN);
    
    if(mysqli_num_rows($resultP)===1){
       $_SESSION['is_logged_in']=1;
        $rowP= mysqli_fetch_array($resultP);
        $pid = $rowP['patientID'];
        $_SESSION['pid'] = $pid;
        header("location:patients/home.php");
    }

    else if(mysqli_num_rows($resultN)===1){
        $_SESSION['is_logged_in']=1;
         $rowN= mysqli_fetch_array($resultN);
         $nid = $rowN['nurseID'];
         $_SESSION['nid'] = $nid;
         header("location:nurses/home.php");
     }

    else if(mysqli_num_rows($resultA)===1){
        $_SESSION['is_logged_in']=1;
         $rowA= mysqli_fetch_array($resultA);
         header("location:admin/home.php");
     }
    else{
        echo "<script>
		alert('Failed Signin! Please enter correct username number or email and password');
        window.open('signin.php','_self');
	</script>";
}
}
    else{
        echo "<script>
		alert('Failed Signin!');
		window.open('signin.php','_self');
	</script>";
    }


 
?>