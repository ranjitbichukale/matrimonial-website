<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])) {
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $cast = $_POST['cast'];
   $education = $_POST['education'];
   $state = $_POST['state'];
   $district = $_POST['district'];
   $look = $_POST['look'];
   $sql = "SELECT * FROM regi WHERE age=$age AND gender='$gender' AND cast='$cast' AND edu='$education' AND dis='$district' AND look='$look'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
    <style>
        body {
            background-image: url('media/hindi-banner.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px; /* Added rounded corners */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 2px solid #FF1493;
            border-radius: 10px; /* Added rounded corners */
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #FF1493;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 12px; /* Added rounded corners */
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #e60073;
        }

        select, input[type="radio"] {
            font-size: 16px;
            padding: 5px;
            border-radius: 5px;
            width: 100%;
            margin: 8px 0;
        }

        select {
            background-color: #f0f0f0;
        }

        h2 {
            text-align: center;
            color: #FF1493;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .center {
            text-align: center;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Search for Profiles</h2>
    <form action="" method="POST">
        <table align="center">
            <tr><td>Age</td>
                <td>
                    <select name="age">
                        <option value=" " selected>--------select----------</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                    </select>
                </td>
            </tr>
            <tr><td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="male"> Male
                </td>
            </tr>
            <tr><td>Cast</td>
                <td>
                    <select name="cast">
                        <option value=" " selected>--------select----------</option>
                        <option value="open">Open</option>
                        <option value="sc">SC</option>
                        <option value="nt">NT</option>
                        <option value="st">ST</option>
                        <option value="obc">OBC</option>
                    </select>
                </td>
            </tr>
            <tr><td>Education</td>
                <td>
                    <select name="education">
                        <option value=" " selected>--------select----------</option>
                        <option value="ba">BA</option>
                        <option value="ma">MA</option>
                        <option value="bcom">B-COM</option>
                        <option value="mcom">M-COM</option>
                        <option value="bsc">BSC</option>
                        <option value="msc">MSC</option>
                        <option value="bca">BCA</option>
                        <option value="mca">MCA</option>
                        <option value="bcs">BCS</option>
                        <option value="diploma">Diploma</option>
                        <option value="engineer">Engineer</option>
                        <option value="phd">PHD</option>
                    </select>
                </td>
            </tr>
            <tr><td>State</td>
                <td>
                    <select name="state">
                        <option value=" " selected>--------select----------</option>
                        <option value="mah">Maharashtra</option>
                        <option value="pun">Punjab</option>
                        <option value="guj">Gujrat</option>
                        <option value="karnataka">Karnataka</option>
                        <option value="raj">Rajasthan</option>
                    </select>
                </td>
            </tr>
            <tr><td>District</td>
                <td>
                    <select name="district">
                        <option value=" " selected>--------select----------</option>
                        <option value="kolhapur">Kolhapur</option>
                        <option value="pune">Pune</option>
                        <option value="sangali">Sangali</option>
                        <option value="satara">Satara</option>
                        <option value="Belgaon">Belgaon</option>
                    </select>
                </td>
            </tr>
            <tr><td>Looking for</td>
                <td>
                    <select name="look">
                        <option value=" " selected>--------select----------</option>
                        <option value="fair">Fair</option>
                        <option value="simple">Simple</option>
                        <option value="smart">Smart</option>
                        <option value="handsome">Handsome</option>
                        <option value="glamorous">Glamorous</option>
                    </select>
                </td>
            </tr>
            <tr class="center">
                <td><input type="submit" value="Submit" name="submit"></td>
                <td><input type="reset" value="Cancel"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit']) && $count > 0) {
        echo "<table align='center' border='2' cellpadding='10'>
                <tr>
                    <th>Fname</th>
                    <th>Lname</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Cast</th>
                    <th>Education</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Look</th>
                </tr>";

        while($rows = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$rows['fname']."</td>
                    <td>".$rows['lname']."</td>
                    <td>".$rows['age']."</td>
                    <td>".$rows['gender']."</td>
                    <td>".$rows['cast']."</td>
                    <td>".$rows['edu']."</td>
                    <td>".$rows['state']."</td>
                    <td>".$rows['dis']."</td>
                    <td>".$rows['look']."</td>
                  </tr>";
        }
        echo "</table>";
    } elseif(isset($_POST['submit'])) {
        echo "<p>No Record Found</p>";
    }

    mysqli_close($conn);
    ?>
</div>

</body>
</html>
