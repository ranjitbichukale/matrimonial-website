<?php
include("connection.php");
session_start();


  $username=$_SESSION["username"];
  $sql = "select * from admin where username='$username'";
   $result = mysqli_query($conn,$sql);

	 $row=mysqli_fetch_assoc($result);
	 $ei = $row['eid'];
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
<center><table border="2" bgcolor="#9370DB">
            <tr>
                <td>Eid</td>
                <td><?php echo$ei;?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo$fn;?></td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td><?php echo$mn;?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo$ln;?></td>
            </tr>
			<tr>
                <td>Current Address</td>
                <td><?php echo$ca;?></td>
            </tr>
            <tr>
                <td>Permanant Address</td>
                <td><?php echo$pa;?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo$gen;?></td>
            </tr>
			<tr>
                <td>Mobile No</td>
                <td><?php echo$mb;?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo$un;?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo$ps;?></td>
            </tr>
			<tr>
                <td>Hobbies</td>
                <td><?php echo$hob;?></td>
            </tr>
			<tr>
                <td>Job Type</td>
                <td><?php echo$jb;?></td>
            </tr>
			<tr>
                <td>Adhaar No</td>
                <td><?php echo$an;?></td>
            </tr>
                   
        </table></center>
        <center><button onclick="window.print()">Print</button></center>

    </body>
</html>
	 
	 
	 
