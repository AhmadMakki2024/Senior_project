<?php
require "../conx.php";

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];

$img = $_FILES['img']['name'];
$imgTmp = $_FILES['img']['tmp_name'];
move_uploaded_file($imgTmp,"../blogs-img/".$img);

$date=date('Y-m-d h:i');


$sql_add_query = "INSERT INTO blogs VALUES ('','$title','$description','$date','$category','$img')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Blog is Published ');
     window.open('blogs.php','_self');
     </script>";

?>