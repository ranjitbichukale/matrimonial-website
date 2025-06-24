<?php
include("connection.php");
session_start();

$username = $_SESSION["username"];
$sql = "SELECT * FROM regi WHERE username='$username'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        table {
            margin-top: 50px;
            border-collapse: collapse;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #6a5acd;
            color: white;
        }
        td {
            background-color: #ffffff;
        }
        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }
        .container {
            background-color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .profile-img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
        button {
            background-color: #6a5acd;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 16px;
        }
        button:hover {
            background-color: #5a4a99;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center; color: #6a5acd;">User Profile</h2>
        <table>
            <tr>
                <th>cid</th>
                <td><?php echo $ci; ?></td>
            </tr>
            <tr>
                <th>Profile</th>
                <td><?php echo $pr; ?></td>
            </tr>
            <tr>
                <th>First Name</th>
                <td><?php echo $fn; ?></td>
            </tr>
            <tr>
                <th>Middle Name</th>
                <td><?php echo $mn; ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $ln; ?></td>
            </tr>
            <tr>
                <th>DOB</th>
                <td><?php echo $db; ?></td>
            </tr>
            <tr>
                <th>Religion</th>
                <td><?php echo $rel; ?></td>
            </tr>
            <tr>
                <th>Country</th>
                <td><?php echo $con; ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo $un; ?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo $ps; ?></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><?php echo $a; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $gen; ?></td>
            </tr>
            <tr>
                <th>Blood Group</th>
                <td><?php echo $b; ?></td>
            </tr>
            <tr>
                <th>Cast</th>
                <td><?php echo $ca; ?></td>
            </tr>
            <tr>
                <th>Family</th>
                <td><?php echo $fam; ?></td>
            </tr>
            <tr>
                <th>Education</th>
                <td><?php echo $ed; ?></td>
            </tr>
            <tr>
                <th>Profession</th>
                <td><?php echo $prof; ?></td>
            </tr>
            <tr>
                <th>Annual Income</th>
                <td><?php echo $ai; ?></td>
            </tr>
            <tr>
                <th>Property</th>
                <td><?php echo $prop; ?></td>
            </tr>
            <tr>
                <th>Mobile No</th>
                <td><?php echo $mb; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $ad; ?></td>
            </tr>
            <tr>
                <th>State</th>
                <td><?php echo $st; ?></td>
            </tr>
            <tr>
                <th>District</th>
                <td><?php echo $di; ?></td>
            </tr>
            <tr>
                <th>Look</th>
                <td><?php echo $lk; ?></td>
            </tr>
            <tr>
                <th>Color</th>
                <td><?php echo $clr; ?></td>
            </tr>
            <tr>
                <th>Joining Date</th>
                <td><?php echo $rd; ?></td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src="photo/userphoto/<?php echo $image; ?>" class="profile-img" alt="User Photo"></td>
            </tr>
        </table>
        <center><button onclick="window.print()">Print</button></center>
    </div>
</body>
</html>
