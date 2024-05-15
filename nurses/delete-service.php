<?php
include("../conx.php");

$aid = ($_GET["id"]);

	 $sql="DELETE FROM services WHERE serviceID='$aid'";
	 $con->query($sql);

	                echo "<script>
                    alert('Service is Deleted');
                    window.open('services.php','_self');
                </script>";
?>