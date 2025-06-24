<?php
include("connection.php");

  
   $sql = "select * from admin";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   if($count>0)
   {
	  echo "<html>
	   <body bgcolor=#40E0D0>
	   <table border=2 align=center padding=2>
	   <tr><th>Eid</th>
		   <th>Fname</th>
		   <th>Mname</th>
		   <th>Lname</th>
		   <th>Current Address</th>
		   <th>Permanant Address</th>
		   <th>Gender</th>
		   <th>Mobile</th>
		   <th>Username</th>
		   <th>Password</th>
		   <th>Hobbies</th>
		   <th>Job</th>
		   <th>Ahaar No</th>
		   <th>Regidate</th>
		   
	   </tr>";	   
      while($rows=mysqli_fetch_assoc($result))
      {
         echo "<tr><td>".$rows['eid']."</td><td>".$rows['fname']."</td><td>".$rows['mname']."</td><td>".$rows['lname']."</td><td>".$rows['currentadd']."</td><td>".$rows['permaddress']."</td><td>".$rows['gender']."</td><td>".$rows['mob']."</td><td>".$rows['username']."</td><td>".$rows['password']."</td><td>".$rows['hoobies']."</td><td>".$rows['job']."</td><td>".$rows['adharno']."</td><td>".$rows['regi']."</td></tr>";
      }
   }
else
{
   echo "No Record Found";
}
 
mysqli_close($conn);

?>
  
      
	