<?php
include("connection.php");
session_start();


  $username=$_SESSION["username"];
  $sql = "select * from admin where username='$username'";
   $result = mysqli_query($conn,$sql);

	 $row=mysqli_fetch_assoc($result);
	 $fn = $row['fname'];
	 $mn = $row['mname'];
	 $ln = $row['lname'];
	 $ca = $row['currentadd'];
	 $pa = $row['permaddress'];
	 $gen = $row['gender'];
	 $mb = $row['mob'];
	 $un = $row['username'];
	 $ps = $row['password'];
	 $hob = $row['hoobies'];
	 $jb = $row['job'];
	 $an = $row['adharno'];
	 	 
?>

<html>
<head>
<title>Registation</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
body{
	background-image:url(vivah2.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
#form{
	background-color:pink;
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
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3" id="form">
<center><b class="registration">Update Your Profile</b></center>
        <form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
        <label>First Name :</label>
        <input type="text" name="fname" class="form-control text" placeholder="fname" value="<?php echo$fn;?>">
		</div>
        <div class="form-group">
		<label>Middle Name :</label>
        <input type="text" name="mname" class="form-control text" placeholder="mname" value="<?php echo$mn;?>">
		</div>
		<div class="form-group">
		<label>Last Name :</label>
        <input type="text" name="lname" class="form-control text" placeholder="lname" value="<?php echo$ln;?>">
		</div>
		<div class="form-group">
		<label>Current Address :</label>
	    <input type="text" name="cadd"  class="form-control text" placeholder="dob" value="<?php echo$ca;?>">
		</div>
		<div class="form-group">
		<label>Permanant Address :</label>
        <input type="text" name="padd" class="form-control text" placeholder="religion" value="<?php echo$pa;?>">
		</div>
		<div class="form-group">
		<label>Gender :</label>
	    <input type="text" name="gender" class="form-control text" placeholder="gender" value="<?php echo$gen;?>">
		</div>
		<div class="form-group">
		<label>Mobile No :</label>
	    <input type="text" name="mob" class="form-control text" placeholder="mob" value="<?php echo$mb;?>">
		</div>
		<div class="form-group">
		<label>Username :</label>
	    <input type="text" name="uname" class="form-control text" placeholder="uname" value="<?php echo$un;?>">
		</div>
		<div class="form-group">
		<label>Password :</label>
	    <input type="text" name="pass" class="form-control text" placeholder="pass" value="<?php echo$ps;?>">
		</div>
		<div class="form-group">
		<label>Hobbies :</label>
	    <input type="text" name="hobby" class="form-control text" placeholder="age" value="<?php echo$hob;?>">
		</div>
		
		<div class="form-group">
		<label>Job Type :</label>
        <input type="text" name="job" class="form-control text" placeholder="bloodgroup" value="<?php echo$jb;?>">
		</div>
		<div class="form-group">
		<label>Adhaar Number :</label>
		<input type="text" name="adhar" class="form-control text" placeholder="cast" value="<?php echo$an;?>">
		</div>
        <div class="form-group">
<input type="submit" class="btn btn-primary" value="submit">
<input type="reset" class="btn btn-danger" value="Reset">
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{	
  $fn = $_POST['fname'];
  $mn = $_POST['mname'];
  $ln = $_POST['lname']; 
  $ca = $_POST['cadd'];
  $pa = $_POST['padd'];
  $gen = $_POST['gender'];
  $mb = $_POST['mob'];
  $un = $_POST['uname'];
  $ps = $_POST['pass'];
  $hob = $_POST['hobby'];
  $jb = $_POST['job'];
  $an = $_POST['adhar'];
  $sql = "update admin set fname='$fn',mname='$mn',lname='$ln',currentadd='$ca',permaddress='$pa',gender='$gen',mob='$mb',password='$ps',hoobies='$hob',job='$jb',adharno='$an' where username='$username'";
    if(mysqli_query($conn,$sql))
  {
     echo "Record updated successfully";
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
