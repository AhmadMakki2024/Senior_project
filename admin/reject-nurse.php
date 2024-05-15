<?php
require "../conx.php";
$appid = $_GET['id'];
$sql="DELETE FROM nurse_applications WHERE applicationID='$appid'";
	 $con->query($sql);

     echo "<script>
     alert('Nurse is Rejected! ');
     window.open('nurses.php','_self');
     </script>";


?>