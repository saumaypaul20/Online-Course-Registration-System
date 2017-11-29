
<html>
<style>


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    margin-left: 50%;
    text-align: center;
     margin: 8px 12px;
}

/* Extra styles for the cancel button */
.cancelbtn {
   
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: center;
   text-align: center;
    
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
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

    table{
        width:100%; text-align:center;
         border: 1px solid black;
        
        
    }
    td,th{
        border: 1px solid black; padding: 3px 2px 1px 1px;
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
    clearfix{
        margin-left: 50%;
        float:left;
        text-align: center;
    }
</style>
<body >
    
    <div style="background-color: grey; color: white; padding-top: 12px; padding-bottom: 6px;text-align:center;">
        <h1> Course Registration System</h1>
    </div>

<h2 style="text-align:center;">Registration</h2>
<form action="studup.php" style="border:1px solid #ccc" method="POST">
<div class="container">
  <label><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="fname" required><br>
	<label><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="lname" required><br>
    <label><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required><br>
	
	<label><b>Email</b></label>
    <input type="text" placeholder="abc@xyz.com" name="email" required><br>
	
	
	
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required><br>
    
	<label><b>Role:</b></label><br>
    Student<input type="radio" name="r1" value="student"><br>
    Proffesor<input type="radio" name="r1" value="prof"><br>
   
	
 
    
    <br>
    <div class="clearfix" >
      <button type="button" class="cancelbtn" onclick="document.location.href='index.php';">Cancel</button>
      <button type="submit" class="signupbtn" name="but_upload">Sign Up</button><br><br><br>
    </div>
  </div>
<br><br><br>
    </form>
</body>
</html>
