<html>
<body bgcolor="#FF6EB4">
      <form action ="" method="POST">
            <table bgcolor="#20B2AA" border="1" align="center">
                <tr><td>Enter First Name</td>
                    <td><input type="text" name="fname"></td></tr>
                <tr><td>Enter Last Name</td>
                    <td><input type="text" name="lname"></td></tr>
                <tr><td>Enter Gender</td>
                    <td><input type="radio" name="gender" value="male">MALE
                        <input type="radio" name="gender" value="female">FEMALE
                    </td>
                </tr>
                <td><input type="submit" value="submit" name="submit"></td>
                <td><input type="reset" value="cancel"></td>
            </table>
        </form>
    </body>
</html>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $gender = $_POST['gender'];
   $sql = "select * from admin where fname='$fname' and lname='$lname' and gender='$gender'";
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
         echo "<tr align=center><td>".$rows['eid']."</td><td>".$rows['fname']."</td><td>".$rows['lname']."</td><td>".$rows['currentadd']."</td><td>".$rows['gender']."</td><td>".$rows['mob']."</td><td>".$rows['username']."</td><td>".$rows['password']."</td><td><a href='profile.php'>View</a></td></tr>";
		
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

