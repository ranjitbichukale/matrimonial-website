<?php
session_start();
include("connection.php"); //require="file name";
?>

<html>
<head>
<title>Registation</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
body{
	background-image:url(shadi3.jpg);
}
#form{
	background-color:#9B30FF;
	min-height:700px;
	padding:5px 40px 40px 40px;
	margin-left:250px;
}
.registration{
	font-size:55px;
	font-family:Times New Roman;
	font-weight:700px;
	border-bottom-style:ridge;
}
.text{
	height:43px;
}
label{
	font-size:18px;
}
.btn-primary{
border-radius:10px;
padding:10px;
width:48%;
}
.btn-danger{
border-radius:10px;
padding:10px;
width:48%;
}
	
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3" id="form">
<center><b class="registration">Registrtion From</b></center>
<form method="POST">
<div class="form-group">
<label>Select Profile :</label>
<select name="pro" class="form-control text">
<option value="Self">Self</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Friend">Friend</option>
<option value="Relative">Relative</option>
</select>
</div>
<div class="form-group">
<label>First Name :</label>
<input type="text" name="fname" class="form-control text" placeholder="Enter First Name">
</div>
<div class="form-group">
<label>Middle Name :</label>
<input type="text" name="mname" class="form-control text" placeholder="Enter Middle Name">
</div>
<div class="form-group">
<label>Last Name :</label>
<input type="text" name="lname" class="form-control text" placeholder="Enter Last Name">
</div>
<div class="form-group">
<label>Date of Birth :</label>
<input type="text" name="dob" class="form-control text" placeholder="Enter Date of Birth">
</div>
<div class="form-group">
<label>Enter Religion :</label>
<select class="form-control text" name="relig">
<option value="Hindu">Hindu</option>
<option value="Muslim">Muslim</option>
<option value="Christan">Christan</option>
<option value="Parsi">Parsi</option>
<option value="Jain">Jain</option>
<option value="Buddhist">Buddhist</option>
<option value="No-Religion">No-Religion</option>
<option value="Other">Other</option>
</select>

</div>
<div class="form-group">
<label>Country :</label>
<select class="form-control text" name="cont">
<option value="India">India</option>
<option value="Pakistan">Pakistan</option>
<option value="America">America</option>
<option value="Japan">Japan</option>
<option value="UK">UK</option>
<option value="South-Africa">South-Africa</option>
<option value="Canada">Canada</option>
<option value="USA">USA</option>
</select>

</div>
<div class="form-group">
<label>Username :</label>
<input type="text" name="uname" class="form-control text" placeholder="Enter Username"  required>
</div>
<div class="form-group">
<label>Password :</label>
<input type="text" name="pass" class="form-control text" placeholder="Enter Password" required>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="submit" name="submit">
<input type="reset" class="btn btn-danger" value="Reset">
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<div>
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
	 ?>
	 <script>window.location.href="l.php";
	 </script>
	 <?php
  }
  else
  {
     echo mysqli_error($conn); 	  
  }
     mysqli_close($conn);
	 }
?>
</div>
  
