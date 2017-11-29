<!DOCTYPE html>
<?php
ob_start();
session_start();
include("database.php");
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

button {
    background-color: grey;
    color: white;
    padding: 14px 20px;
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

<h2 >Login Form</h2>

<form method="POST">
  

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    
  </div>

  
</form>
    
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=mysqli_real_escape_string($con,$_POST['username']); 
$mypassword=mysqli_real_escape_string($con,$_POST['password']); 

 
$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$_SESSION['id']=$row['id'];
$_SESSION['role']=$row['role'];
$count=mysqli_num_rows($result);
if($count==1)
{
			if ($row['role']=="admin")
			{ 
 
                               header ("location: admin.php"); 
                             
			}
			elseif ($row['role']=="student")
			{ 
                               $_SESSION['role']=$row['role'];
 
                               header ("location: student.php"); 
                             
 
			}
    else{
        $_SESSION['role']=$row['role'];
         header ("location: prof.php");
    }
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
    <br>
      <input type='button'value='HOME' class="btn" onclick="document.location.href='index.php';"/>
</body>
</html>
