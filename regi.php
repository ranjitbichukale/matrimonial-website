<html>
<head>
     <title>Admin Login</title>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>	
<style>
body
{
	background-color:#9F79EE;
}
table,td{
			 border:2px solid red;
		 }
</style>
<body bgcolor="orangered">
<center><h1>Registration Here!!!</h1></center>
<form action="" method="POST" enctype="multipart/form-data">
<table border=2 align="center" cellspadding=3>
 <tr><td>Enter Profile</td>
 <td><select name="pro">
 <option value=" " selected>
 ----------select-----------</option>   
 <option value="self">Self</option>
 <option value="son">Son</option>
 <option value="daughter">Daughter</option>
 <option value="brother">Brother</option>
 <option value="sister">Sister</option>
 <option value="friend">Friend</option>
 <option value="relative">Relative</option>    
 </select></td></tr>        
 <tr><td>Enter First Name</td>
 <td><input type="text" name="fname"></td></tr>
 <tr><td>Enter Middle Name</td>
 <td><input type="text" name="mname"></td></tr>
 <tr><td>Enter Last Name</td>
 <td><input type="text" name="lname"></td></tr>
 <tr><td>Enter Date of Birth</td>
 <td><input type="text" name="dob"></td></tr>
 <tr><td>Enter Religion</td>
 <td><select name="relig">
 <option value=" " selected>
 ----------select-----------</option>   
 <option value="hindu">Hindu</option>
 <option value="muslim">Muslim</option>
 <option value="christan">Christan</option>
 <option value="parsi">Parsi</option>
 <option value="jain">Jain</option>
 <option value="buddhist">Buddhist</option>
 <option value="no-religion">No-Religion</option>
 <option value="other">Other</option>    
 </select></td></tr>
 <tr><td>Enter Country</td>
 <td><select name="cont">
 <option value=" " selected>
 ----------select-----------</option>
 <option value="India">India</option>
 <option value="Pakistan">Pakistan</option>
 <option value="Japan">Japan</option>
 <option value="usa">USA</option>
 <option value="uk">UK</option>
 <option value="southafrica">South-Africa</option>
 <option value="canada">Canada</option>    
 </select></td></tr>        
 <tr><td>Enter UserName</td>
 <td><input type="text" name="uname" pattern="[a-zA-Z]{8,}" required></td></tr>
 <tr><td>Enter Password</td>
 <td><input type="text" name="pass" pattern="[a-zA-Z]{8,}+@[0-9]{3,}" required></td></tr>
 <tr align="center">
 <td><input class="btn btn-primary" type="submit" value="submit" name="submit">
<td><input class="btn btn-danger" type="reset" value="cancel"></td></tr>

  </tr>
</table>
</form>
</body>
</html>

 <?php
include("connection.php");
if(isset($_POST['submit']))
{
  $pr = $_POST['pro'];	
  $fn = $_POST['fname'];
  $mn = $_POST['mname'];
  $ln = $_POST['lname']; 
  $db = $_POST['dob'];
  $rel = $_POST['relig'];
  $con = $_POST['cont'];
  $un = $_POST['uname'];
  $ps = $_POST['pass'];
  
  $sql = "insert into regi(profile,fname,mname,lname,dob,religion,country,username,password,regidate)values('$pr','$fn','$mn','$ln','$db','$rel','$con','$un','$ps',now())";
  if(mysqli_query($conn,$sql))
  {
     echo "Record inserted successfully";
  }
  else
  {
     echo mysqli_error($conn); 	  
  }
     mysqli_close($conn);
	 }
?>
</body>
</html>
  