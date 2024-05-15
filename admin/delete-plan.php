<?php
require "../conx.php";
$planid = $_GET['id'];
$sql="DELETE FROM insurance_plans WHERE planID='$planid'";
	 $con->query($sql);

     echo "<script>
     alert('Plan is Removed! ');
     window.open('insurance-plans.php','_self');
     </script>";


?>