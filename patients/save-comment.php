<?php
session_start();
require "../conx.php";
$pid = $_SESSION['pid'];

$comment = $_POST['comment'];
$date = date('y-m-d');

$bid = $_GET['id'];


$sql_add_query = "INSERT INTO comments VALUES ('','$comment','$date','$bid','$pid')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Thank you for your comment! ');
     window.open('view-blog.php?id=$bid','_self');
     </script>";

?>