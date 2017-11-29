<?php
ob_start();
session_start();

include 'database.php';
if(isset($_SESSION['role'])=='admin')
{
$query1= mysqli_query($con,"SELECT * FROM `users` WHERE `id`='".$_SESSION['id']."' AND `role`='admin' ");
$arr1 = mysqli_fetch_array($query1);
$num1 = mysqli_num_rows($query1); 
if($num1==1)
{
?>


<html>
<style>
form {
    padding-left: 24%;
    max-width: 50%;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
    input[type=button] {
    width: 50%;
    padding: 19px 17px;
    margin: 8px 0;
 border-radius: 2px;
text-align: center;
    
}

button {
    background-color: grey;
    color: white;
    padding: 14px 18px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
   
    }
}
</style>
<body style="text-align:center;">
    
    <div style="background-color: grey; color: white; padding-top: 12px; padding-bottom: 6px;">
        <h1> Course Registration System</h1>
    </div>

<h2 >Admin Dashboard</h2>

<form>
  

  <div class="container">
    
    <input type="button" value ="View Students"  onclick="window.location.href='adminstud.php'" >
    <input type="button" value="View Proffessors" onclick="window.location.href='adminprof.php'">
    <input type="button" value="View Course" onclick="window.location.href='admincourse.php'">
   
    <input type="button" value="View Examination" onclick="window.location.href='adminexam.php'">
    <input type="button" value="View Result" onclick="window.location.href='adminres.php'">
    
    <input type="button" value="Logout" onclick="window.location.href='logout.php'">
      
      
        
   
    
  </div>

  
</form>
<?php 
   }
    else
    {
      header ("location:login1.php");
      }
 
    }    
else
      header ("location:login1.php");
    ?>
</body>
</html>
