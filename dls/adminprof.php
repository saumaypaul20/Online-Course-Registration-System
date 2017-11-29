<?php
ob_start();
session_start();

?>
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
    input[type=button] {
   
    padding: 9px 11px;
    margin: 8px 0;
 border-radius: 2px;
text-align: center;
        margin-left: 24px;
    
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

    table{
        width:100%; text-align:center;
         border: 1px solid black;
        
    }
    td,th{
        border: 1px solid black;
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
<body >
    
    <div style="background-color: grey; color: white; padding-top: 12px; padding-bottom: 6px;text-align:center;">
        <h1> Course Registration System</h1>
    </div>

<h2 style="text-align:center;">Professor Details</h2>

<table style="">
  <tr>
   
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Department</th> 
    <th>Status</th>
  </tr>
  <tr>
   
    <td>1</td>
    <td>Alok</td>
    <td>alok@gmail.com</td>
    <td>CSE</td>
    <td>active</td>
  </tr>
  <tr>
     
    <td>2</td>
    <td>Priyam</td>
   <td>priyam@gmail.com</td>
    <td>CSE</td>
     <td>active</td>
  </tr>
  <tr>
      
    <td>3</td>
    <td>Raj</td>
    <td>raj@gmail.com</td>
    <td>CSE</td>
     <td>active</td>
  </tr>
    
    <tr>
        
    <td>4</td>
    <td>Tripti</td>
    <td>tripti@gmail.com</td>
    <td>CSE</td>
     <td>active</td>
  </tr>
</table>
    <br><br>
     <input type='button'value='Back' class="btn" onclick="document.location.href='admin.php';"/>
</body>
</html>
