<?php
include("connection.php");
session_start();


  $username=$_SESSION["username"];
  $sql = "select * from regi where username='$username'";
   $result = mysqli_query($conn,$sql);

	 $row=mysqli_fetch_assoc($result);
	 $pr = $row['profile'];
	 $fn = $row['fname'];
	 $mn = $row['mname'];
	 $ln = $row['lname'];
	 $db = $row['dob'];
	 $rel = $row['religion'];
	 $con = $row['country'];
	 $un = $row['username'];
	 $ps = $row['password'];
	 $a = $row['age'];
	 $gen = $row['gender'];
	 $b = $row['bg'];
	 $ca = $row['cast'];
	 $fam = $row['family'];
	 $ed = $row['edu'];
	 $prof = $row['profession'];
	 $ai = $row['aincome'];
	 $prop = $row['property'];
	 $mb = $row['mob'];
	 $ad = $row['address'];
	 $st = $row['state'];
	 $di = $row['dis'];
	 $lk = $row['look'];
	 $clr = $row['color'];
	 $image = $row['image'];
	 
?>
<html>
<body>
<center><h1><b><u>Update Your Profile</u></b></h1>
        <hr size="5" color="#AB0032">
        <form action="" method="POST" enctype="multipart/form-data">
            <table bgcolor="#00BFFF" border="3" width="150" height="500">
			<tr><td>Enter Profile</td>
                <td><input type="text" name="profile" placeholder="profile" value="<?php echo $pr;?>"></td>
				</tr>
                <tr><td>First Name</td>
                    <td><input type="text" name="fname" placeholder="fname" value="<?php echo$fn;?>"></td>
                </tr>
                <tr><td>Middle Name</td>
                    <td><input type="text" name="mname" placeholder="mname" value="<?php echo$mn;?>"></td>
                </tr>
                <tr><td>Last Name</td>
                    <td><input type="text" name="lname" placeholder="lname" value="<?php echo$ln;?>"></td>
                </tr>
                <tr><td>Date of Birth</td>
                    <td><input type="text" name="dob" placeholder="dob" value="<?php echo$db;?>"></td>
                </tr>
                <tr><td>Religion</td>
                    <td><input type="text" name="religion" placeholder="religion" value="<?php echo$rel;?>"></td>
                </tr>
                <tr><td>country</td>
                    <td><input type="text" name="country" placeholder="country" value="<?php echo$con;?>"></td>
                </tr>
                <tr><td>Username</td>
                    <td><input type="text" name="username" placeholder="uname" value="<?php echo$un;?>"></td>
                </tr>
                <tr><td>Password</td>
                    <td><input type="text" name="password" placeholder="pass" value="<?php echo$ps;?>"></td>
                </tr>
                <tr><td>Age</td>
                <td><input type="text" name="age" placeholder="age" required="" value="<?php echo$a;?>"></td>
				</tr>
                <tr><td>gender</td>
                    <td><input type="radio" name="gender" value="female" placeholder="gender" value="<?php echo$gen;?>">Female
                        <input type="radio" name="gender" value="male" placeholder="gender" value="<?php echo$gen;?>">Male</td>
                </tr>
                <tr><td>Blood Group</td>
                <td><input type="text" name="bg" placeholder="bloodgroup" value="<?php echo$b;?>"></td>
				</tr>
                <tr><td>Cast</td>
                <td><input type="text" name="cast" placeholder="cast" value="<?php echo$ca;?>"></td>
				</tr>
                <tr><td>Family</td>
                <td><input type="text" name="family" placeholder="family" value="<?php echo$fam;?>"></td>
				</tr>
                <tr><td>Education</td>
                <td><input type="text" name="edu" placeholder="education" value="<?php echo$ed;?>"></td>
				</tr>
                <tr><td>Profession</td>
                <td><input type="text" name="profession" placeholder="profession" value="<?php echo$prof;?>"></td>
				</tr>    
                <tr><td>Annual Income</td>
                    <td><input type="text" name="aincome" placeholder="annualincome" value="<?php echo$ai;?>"></td>
                </tr>
                <tr><td>Property</td>
                    <td><input type="text" name="property" placeholder="property" value="<?php echo$prop;?>"></td>
                </tr>
                <tr><td>Mobile No</td>
                    <td><input type="text" name="mob" placeholder="mob" value="<?php echo$mb;?>"></td>
                </tr>
                <tr><td>Address</td>
                    <td><input type="text" name="address" value="<?php echo$ad;?>"></td>
				</tr>
                <tr><td>State</td>        
                <td><input type="text" name="state" placeholder="state" value="<?php echo$st;?>"></td>   
                </tr>
                <tr><td>District</td>        
                <td><input type="text" name="dis" placeholder="district" value="<?php echo$di;?>"></td>
                </tr>
                <tr><td>Looking for</td>        
                <td><input type="text" name="look" placeholder="district" value="<?php echo$lk;?>"></td>
                </tr>
                <tr><td>Color</td>        
                <td><input type="text" name="color" placeholder="color" value="<?php echo$clr;?>"></td>
                </tr>
				<tr><td>Image</td>
                <td><img src="photo/userphoto/<?php echo$image;?>" height=50 width=50>
			    <input type="file" name="image"></td></tr>
                <tr align=center>
                    <td><input type="submit" value="submit" name="submit"></td>
                    <td><input type="Reset" value="cancel"></td>
                </tr>
				</center>
				</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $pr = $_POST['profile'];	
  $fn = $_POST['fname'];
  $mn = $_POST['mname'];
  $ln = $_POST['lname']; 
  $db = $_POST['dob'];
  $rel = $_POST['religion'];
  $con = $_POST['country'];
  $un = $_POST['username'];
  $ps = $_POST['password'];
  $a = $_POST['age'];
  $gen = $_POST['gender'];
  $b = $_POST['bg'];
  $ca = $_POST['cast'];
  $fam = $_POST['family'];
  $ed = $_POST['edu'];
  $prof = $_POST['profession'];
  $ai = $_POST['aincome'];
  $prop = $_POST['property'];
  $mb = $_POST['mob'];
  $ad = $_POST['address'];
  $st = $_POST['state'];
  $di = $_POST['dis'];
  $lk = $_POST['look'];
  $clr = $_POST['color'];
  $image = $_FILES['image']['name'];
  $ph = $_FILES['image']['tmp_name'];
  move_uploaded_file($ph,"photo/userphoto/$image");
  $sql = "update regi set profile='$pr',fname='$fn',mname='$mn',lname='$ln',dob='$db',religion='$rel',country='$con',password='$ps',age='$a',gender='$gen',bg='$b',cast='$ca',family='$fam',edu='$ed',profession='$prof',aincome='$ai',property='$prop',mob='$mb',address='$ad',state='$st',dis='$di',look='$lk',color='$clr',image='$image' where username='$username'";
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
