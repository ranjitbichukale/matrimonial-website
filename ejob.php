<html>
<body bgcolor="orangered">
<form action="" method="POST" enctype="multipart/form-data">
<table border=2 align="center" cellspadding=3>        
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
   $jb = $_POST['job'];
   $sql = "select * from admin where job='$jb'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   if($count>0)
   {
	   echo "<html>
	   <body>
	   <table border=2 align=center padding=2>
	   <tr><th>Eid</th>
	       <th>Fname</th>
		   <th>Lname</th>
		   <th>Current Address</th>
		   <th>Gender</th>
		   <th>Mobile No</th>
		   <th>Username</th>
		   <th>Password</th>
		   <th>View all</th>
	   </tr>";
      while($rows=mysqli_fetch_assoc($result))
      {
         echo "<tr align=center><td>".$rows['eid']."</td><td>".$rows['fname']."</td><td>".$rows['lname']."</td><td>".$rows['currentadd']."</td><td>".$rows['gender']."</td><td>".$rows['mob']."</td><td>".$rows['username']."</td><td>".$rows['password']."</td></tr>";
      }
   }
else
{
   echo "No Record Found";
}
}  
mysqli_close($conn);

?>
</body>
</html>   
