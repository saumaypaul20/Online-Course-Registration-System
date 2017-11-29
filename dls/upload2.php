<?php
$conn = new mysqli("localhost","root","","dls");
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}



$course=$_POST['course'];
$title=$_POST['title'];
$date=$_POST['date'];
    
   $q= "INSERT INTO exam ( title, course,date)
    VALUES ( '$title','$course','$date')" ;
    mysqli_query($conn,$q);
    header("Location: profexam.php");



?>