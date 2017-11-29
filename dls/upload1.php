<?php
$conn = new mysqli("localhost","root","","dls");
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}




$target = "upload/";
$target = $target . basename( $_FILES['Filename']['name']);

//This gets all the other information from the form
$Filename=basename( $_FILES['Filename']['name']);
$fileTarget = $target.$Filename;
$tempFileName = $_FILES["Filename"]["tmp_name"];

if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
  
    echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";

}

$course=$_POST['course'];
$title=$_POST['title'];
$date=$_POST['date'];
    
   $q= "INSERT INTO assignments (path, title, course,lastdate)
    VALUES ('$fileTarget', '$title','$course','$date')" ;
    mysqli_query($conn,$q);
    header("Location: profass.php");



?>