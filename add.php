<html>
<body bgcolor="orangered">
<form action="" method="POST" enctype="multipart/form-data">
<table border=2 align="center" cellspadding=3>        
 <tr><td>Enter First Name</td>
 <td><input type="text" name="fname" placeholder="First Name"></td></tr>
 <tr><td>Enter Middle Name</td>
 <td><input type="text" name="mname" placeholder="Middle Name"></td></tr>
 <tr><td>Enter Last Name</td>
 <td><input type="text" name="lname" placeholder="Last Name"></td></tr>
 <tr><td>Current Address</td>
 <td><textarea rows="4" cols="20" name="cadd" placeholder="Current Address">
 </textarea></td></tr>
 <tr><td>Permanant Address</td>
 <td><textarea rows="4" cols="20" name="padd" placeholder="Permanant Address">
 </textarea></td></tr>
 <tr><td>gender</td>
 <td><input type="radio" name="gender" value="female" placeholder="Gender">Female
 <input type="radio" name="gender" value="male" placeholder="Gender">Male</td>
 </tr>
 <tr><td>Mobile No</td>
 <td><input type="text" name="mob" placeholder="Mobile No"></td>
 </tr>
 <tr><td>Enter UserName</td>
 <td><input type="text" name="uname" pattern="[a-zA-Z]{8,}" placeholder="Username" required></td></tr>
 <tr><td>Enter Password</td>
 <td><input type="text" name="pass"  placeholder="Password" required></td></tr>
 <tr><td>Hobbies</td>
 <td><textarea rows="4" cols="20" name="hobby" placeholder="Hobbies">
 </textarea></td></tr>
 <tr><td>Enter Job Type</td>
 <td><select name="job">
 <option value=" " selected>
 ----------select-----------</option>   
 <option value="director">Director</option>
 <option value="manager">Manager</option>
 <option value="accountant">Accountant</option>
 <option value="salesexecute">Salesexecute</option>
 <option value="serviceprovider">ServiceProvider</option>   
 </select></td></tr>
 <tr><td>Adhaar No</td>
 <td><input type="text" name="adhar" placeholder="Adhaar No"></td>
 </tr>
 <tr align="center">
 <td><input type="submit" value="submit" name="submit">
 <td><input type="reset" value="cancel">
 </tr>
</table>
</form>
</body>
</html>

 <?php
include("connection.php");
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
  $sql = "insert into admin(fname,mname,lname,currentadd,permaddress,gender,mob,username,password,hoobies,job,adharno)values('$fn','$mn','$ln','$ca','$pa','$gen','$mb','$un','$ps','$hob','$jb','$an')";
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
  