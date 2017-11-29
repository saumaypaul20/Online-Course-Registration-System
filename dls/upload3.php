<?php
$conn = new mysqli("localhost","root","","dls");
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}



$cname=$_POST['cname'];
$maxlimit=$_POST['maxlimit'];
$credits=$_POST['credits'];
$available_seats=$_POST['available_seats'];
$registered=$_POST['registered'];
    
   $q= "INSERT INTO course ( cname, maxlimit,credits,available_seats,registered)
    VALUES ( '$cname','$maxlimit','$credits','$available_seats','$registered')" ;
    mysqli_query($conn,$q);
    header("Location: admincourse.php");



?>