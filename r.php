<html>
<head>
<title>Admin Login</title>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 </head>
<style>
     body{
		 background-color:#9F79EE;
		 padding-left:500px;
	     }
		 table,td{
			 border:2px solid black;
		 }
		 h2{
			 text-align:center;
			 color:red;
			 padding-top:50px;
		 }
		 </style>
<body>
<center>
<form action="" method="POST" enctype="multipart/form-data">
<div class="container">
<div class="row">
</center>
<div class="col-sm-3">
<h2><center><u><b>Registration Here!!!</b></u></center></h2>
<hr class="mb-3">
 <label for="enterprofile"><b>Enter Profile</b></label>
 <input class="form-control" type="text" name="enterprofile" required>
         
 <label for="firstname"><b>Enter First Name</b></label>
 <input class="form-control" type="text" name="firstname" required>
 
 <label for="middlename"><b>Enter Middle Name</b></label>
 <input class="form-control" type="text" name="middlename" required>
 
 <label for="lastname"><b>Enter Last Name</b></label>
 <input class="form-control" type="text" name="lastname" required>
 
 <label for="birth"><b>Enter Date of Birth</b></label>
 <input class="form-control" type="text" name="birth" required>
 
 <label for="religion"><b>Enter Religion</b></label>
 <input class="form-control" type="text" name="religion" required>
 
 <label for="country"><b>Enter Country</b></label>
 <input class="form-control" type="text" name="country" required>
 
 <label for="uname"><b>Enter UserName</b></label>
 <input class="form-control" type="text" name="uname" pattern="[a-zA-Z]{8,}" required>
 
 <label for="pass"><b>Enter Password</b></label>
 <input class="form-control" type="text" name="pass" pattern="[a-zA-Z]{8,}+@[0-9]{3,}" required>
 
 <input class="btn btn-primary" type="submit" value="submit" name="submit">
 <input class="btn btn-danger" type="reset" value="cancel">
 
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
</div>
</body>
</html>
  