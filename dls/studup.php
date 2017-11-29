<?php
$conn = new mysqli("localhost","root","","dls");
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}




$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$username=$_POST['username'];
$role=$_POST['r1'];



$q="INSERT INTO users(fname,lname,email,username,password,role) VALUES('$fname','$lname','$email','$username','$pwd','$role')";
    
mysqli_query($conn,$q);

    header("Location: login1.php");

    ?>