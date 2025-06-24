<?php
include("connection.php");

  
   $sql = "select * from regi";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   if($count>0)
   {
	  echo "<html>
	   <body bgcolor=#40E0D0>
	   <table border=2 align=center padding=2>
	   <tr><th>Cid</th>
	       <th>Profile</th>
		   <th>Fname</th>
		   <th>Mname</th>
		   <th>Lname</th>
		   <th>Dob</th>
		   <th>Religion</th>
		   <th>Country</th>
		   <th>Username</th>
		   <th>Password</th>
		   <th>Age</th>
		   <th>Gender</th>
		   <th>Blood Group</th>
		   <th>Cast</th>
		   <th>Family</th>
		   <th>Education</th>
		   <th>Profession</th>
		   <th>Annual Income</th>
		   <th>Property</th>
		   <th>Mob</th>
		   <th>Address</th>
		   <th>State</th>
		   <th>District</th>
		   <th>Look</th>
		   <th>Color</th>
		   <th>Regidate</th>
		   <th>Image</th>
	   </tr>";	   
      while($rows=mysqli_fetch_assoc($result))
      {
         echo "<tr><td>".$rows['cid']."</td><td>".$rows['profile']."</td><td>".$rows['fname']."</td><td>".$rows['mname']."</td><td>".$rows['lname']."</td><td>".$rows['dob']."</td><td>".$rows['religion']."</td><td>".$rows['country']."</td><td>".$rows['username']."</td><td>".$rows['password']."</td><td>".$rows['age']."</td><td>".$rows['gender']."</td><td>".$rows['bg']."</td><td>".$rows['cast']."</td><td>".$rows['family']."</td><td>".$rows['edu']."</td><td>".$rows['profession']."</td><td>".$rows['aincome']."</td><td>".$rows['property']."</td><td>".$rows['mob']."</td><td>".$rows['address']."</td><td>".$rows['state']."</td><td>".$rows['dis']."</td><td>".$rows['look']."</td><td>".$rows['color']."</td><td>".$rows['regidate']."</td><td>".$rows['image']."</td></tr>";
      }
   }
else
{
   echo "No Record Found";
}
 
mysqli_close($conn);

?>
  
      
	