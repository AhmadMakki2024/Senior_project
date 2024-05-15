<?php
require "../conx.php";
$bid = $_GET['id'];
$sql="DELETE FROM blogs WHERE blogID='$bid'";
	 $con->query($sql);

     echo "<script>
     alert('Blog is Removed! ');
     window.open('blogs.php','_self');
     </script>";


?>