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
<body bgcolor="lightgreen">
<center><h1><b><u>Update Your Profile</u></b></h1>
        <hr size="5" color="red">
        <form action="" method="POST" enctype="multipart/form-data">
            Enter Profile  :     <input type="text" size="50" name="profile" placeholder="profile" value="<?php echo $pr;?>"><br><br>
			First Name     :     <input type="text" size="50" name="fname" placeholder="fname" value="<?php echo$fn;?>"><br><br>
            Middle Name    :   <input type="text" size="47" name="mname" placeholder="mname" value="<?php echo$mn;?>"><br><br>
            Last Name      :   <input type="text" size="50" name="lname" placeholder="lname" value="<?php echo$ln;?>"><br><br>
			Date of Birth  :   <input type="text" size="48" name="dob" placeholder="dob" value="<?php echo$db;?>"><br><br>
            Religion       :   <input type="text" size="50" name="religion" placeholder="religion" value="<?php echo$rel;?>"><br><br>
			country        :   <input type="text" size="50" name="country" placeholder="country" value="<?php echo$con;?>"><br><br>
			Username       :   <input type="text" size="50" name="username" placeholder="uname" value="<?php echo$un;?>"><br><br>
			Password       :   <input type="text" size="50" name="password" placeholder="pass" value="<?php echo$ps;?>"><br><br>
			Age            :   <input type="text" size="50" name="age" placeholder="age" required="" value="<?php echo$a;?>"><br><br>
			Gender         :   <input type="radio" size="50" name="gender" value="female" placeholder="gender" value="<?php echo$gen;?>">Female
                               <input type="radio" size="50" name="gender" value="male" placeholder="gender" value="<?php echo$gen;?>">Male<br><br>
            Blood Group    :   <input type="text" size="50" name="bg" placeholder="bloodgroup" value="<?php echo$b;?>"><br><br>
			Cast           :   <input type="text" size="50" name="cast" placeholder="cast" value="<?php echo$ca;?>"><br><br>
			Family         :   <input type="text" size="50" name="family" placeholder="family" value="<?php echo$fam;?>"><br><br>
			Education      :   <input type="text" size="50" name="edu" placeholder="education" value="<?php echo$ed;?>"><br><br>
			Profession     :   <input type="text" size="50" name="profession" placeholder="profession" value="<?php echo$prof;?>"><br><br>
			Annual Income  :   <input type="text" size="50" name="aincome" placeholder="annualincome" value="<?php echo$ai;?>"><br><br>
			Property       :   <input type="text" size="50" name="property" placeholder="property" value="<?php echo$prop;?>"><br><br>
			Mobile No      :   <input type="text" size="50" name="mob" placeholder="mob" value="<?php echo$mb;?>"><br><br>
			Address        :   <input type="text" size="50" name="address" value="<?php echo$ad;?>"><br><br>
			State          :   <input type="text" size="50" name="state" placeholder="state" value="<?php echo$st;?>"><br><br>
			District       :   <input type="text" size="50" name="dis" placeholder="district" value="<?php echo$di;?>"><br><br>
			Looking for    :   <input type="text" size="50" name="look" placeholder="district" value="<?php echo$lk;?>"><br><br>
			Color          :   <input type="text" size="50" name="color" placeholder="color" value="<?php echo$clr;?>"><br><br>
			Image          :   <img src="photo/userphoto/<?php echo$image;?>" height=50 width=50><br><br>
			                   <input type="file" name="image"><br><br>
                
                    <input type="submit" value="submit" name="submit">
                    <input type="Reset" value="cancel">
                
				</center>
				
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
