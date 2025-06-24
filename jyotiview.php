<?php
include("connection.php");
session_start();

   $fname = $_POST['fname'];
   $sql = "select * from regi where fname='$fname'";
   $result = mysqli_query($conn,$sql);
   
   
    $row=mysqli_fetch_assoc($result);
	 $ci = $row['cid'];
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
	 $rd = $row['regidate'];
	 $image = $row['image'];
?>
<center><table border="2" bgcolor="#9370DB">
            <tr>
                <th>cid</th>
                <td><?php echo$ci;?></td>
            </tr>
            <tr><th>Profile</th>
                <td><?php echo$pr;?></td>
            </tr>
            <tr>
                <th>First Name</th>
                <td><?php echo$fn;?></td>
            </tr>
            <tr>
                <th>Middle Name</th>
                <td><?php echo$mn;?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo$ln;?></td>
            </tr>
            <tr>
                <th>DOB</th>
                 <td><?php echo$db;?></td>
            </tr>
            <tr>
                <th>Religion</th>
                <td><?php echo$rel;?></td>
            </tr>
            <tr>
                <th>Country</th>
                <td><?php echo$con;?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo$un;?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo$ps;?></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><?php echo$a;?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo$gen;?></td>
            </tr>
            <tr>
                <th>Blood Group</th>
                <td><?php echo$b;?></td>
            </tr>
            <tr>
                <th>cast</th>
                <td><?php echo$ca;?></td>
            </tr>
            <tr>
                <th>Family</th>
                <td><?php echo$fam;?></td>
            </tr>
            <tr>
                <th>Education</th>
                <td><?php echo$ed;?></td>
            </tr>
            <tr>
                <th>Profession</th>
                <td><?php echo$prof;?></td>
            </tr>
            <tr>
                <th>Annual Income</th>
                <td><?php echo$ai;?></td>
            </tr>
            <tr>
                <th>Property</th>
                <td><?php echo$prop;?></td>
            </tr>
            <tr>
                <th>Mobile No</th>
                <td><?php echo$mb;?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo$ad;?></td>
            </tr>
            <tr>
                <th>State</th>
                <td><?php echo$st;?></td>
            </tr>
            <tr>
                <th>District</th>
                <td><?php echo$di;?></td>
            </tr>
            <tr>
                <th>Look</th>
                <td><?php echo$lk;?></td>
            </tr>
            <tr>
                <th>Color</th>
                <td><?php echo$clr;?></td>
            </tr>
            <tr>
                <th>Joining Date</th>
                <td><?php echo$rd;?></td>
            </tr>
            <tr>
                <th>Image</th>
                <td><?php echo$image;?></td>
            </tr>
             
        </table></center>
        <center><button onclick="window.print()">Print</button></center>

    </body>
</html>