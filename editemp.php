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
<body bgcolor="lightgreen">
<center><h1><b><u>Update Your Profile</u></b></h1>
        <hr size="5" color="red">
        <form action="" method="POST" enctype="multipart/form-data">
			First Name         :     <input type="text" size="50" name="fname" placeholder="fname" value="<?php echo$fn;?>"><br><br>
            Middle Name        :   <input type="text" size="47" name="mname" placeholder="mname" value="<?php echo$mn;?>"><br><br>
            Last Name          :   <input type="text" size="50" name="lname" placeholder="lname" value="<?php echo$ln;?>"><br><br>
			Current Address    :   <input type="text" size="50" name="cadd" placeholder="Current Address" value="<?php echo$ca;?>"><br><br>
			Permanant Address  :   <input type="text" size="50" name="padd" placeholder="Permanant Address" value="<?php echo$pa;?>"><br><br>
			Gender             :   <input type="radio" size="50" name="gender" value="female" placeholder="gender" value="<?php echo$gen;?>">Female
                                   <input type="radio" size="50" name="gender" value="male" placeholder="gender" value="<?php echo$gen;?>">Male<br><br>
			Mobile No          :   <input type="text" size="50" name="mob" placeholder="mob" value="<?php echo$mb;?>"><br><br>				   
			Username           :   <input type="text" size="50" name="uname" placeholder="uname" value="<?php echo$un;?>"><br><br>
			Password           :   <input type="text" size="50" name="pass" placeholder="pass" value="<?php echo$ps;?>"><br><br>
			Hobbies            :   <input type="text" size="50" name="hobby" placeholder="Hobbies" value="<?php echo$hob;?>"><br><br>
            Job Type           :   <input type="text" size="50" name="job" placeholder="job" value="<?php echo$jb;?>"><br><br>
            Adhaar No          :   <input type="text" size="50" name="adhar" placeholder="Adhar No" value="<?php echo$an;?>"><br><br>			
                                   <input type="submit" value="submit" name="submit">
                                   <input type="Reset" value="cancel">
                
				</center>
				
</form>
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
  }
  else
  {
     echo mysqli_error($conn); 	  
  }
     mysqli_close($conn);
	 }
?>
