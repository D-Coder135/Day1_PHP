<?php

$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];

$connect = mysqli_connect("localhost","root","");

mysqli_select_db($connect, "google");

$query="UPDATE student SET email='$z' WHERE name='$x' AND password='$y'";
mysqli_query($connect, $query);

echo "Database Updated Successfully";

?>