<?php

$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];

$connect = mysqli_connect("localhost","root","");


mysqli_select_db($connect, "google");
$query="INSERT INTO student VALUES ('$x','$y','$z')";
mysqli_query($connect, $query);

echo "Database Updated Successfully";

?>