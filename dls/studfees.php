<!DOCTYPE html>
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
   
    padding: 2px 11px;

 border-radius: 2px;

    margin-top: 1px;margin-bottom: 1px;
    
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
</style>
<body >
    
    <div style="background-color: grey; color: white; padding-top: 12px; padding-bottom: 6px;text-align:center;">
        <h1> Course Registration System</h1>
    </div>

<h2 style="text-align:center;">Students-> Fees Payment</h2>

<table>
 
    
    

    <tr>
    
    <th>No</th>
    <th>Month</th>
    <th>Amount</th>
    <th>Status</th> 
    
  </tr>
  <tr>
   
    <td>1</td>
    <td>May</td>
    <td>1550</td>
    <td>Paid</td>
    
  </tr>
  <tr>
     
    <td>2</td>
    <td>June</td>
    <td>1550</td>
    <td>Paid</td>
   
  </tr>
  <tr>
     
    <td>3</td>
    <td>July</td>
    <td>80</td>
    <td>Paid</td>
    
  </tr>
    
    <tr>
        
    <td>4</td>
    <td>August</td>
    <td>1550</td>
    <td><input type="button" value="Pay"></td>
    
  </tr>
</table>
  
</body>
</html>
