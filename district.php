<!DOCTYPE html>
<html>
<head>
    <title>District Record Search</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('sh6.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: #000;
        }

        .form-container {
            background-color: rgba(255, 253, 208, 0.95); /* Light cream */
            width: 50%;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #000;
        }

        input[type="text"], input[type="submit"], input[type="reset"] {
            padding: 8px;
            width: 90%;
            font-size: 16px;
        }

        .result-table {
            margin: 30px auto;
            background-color: rgba(255, 255, 255, 0.9);
            width: 90%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 4px #000;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<h2>Search by District Name</h2>

<div class="form-container">
    <form action="" method="POST">
        <table>
            <tr>
                <td>Enter District Name:</td>
                <td><input type="text" name="dis" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit"></td>
                <td><input type="reset" value="Cancel"></td>
            </tr>
        </table>
    </form>
</div>

<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $district = $_POST['dis'];
    $sql = "SELECT * FROM regi WHERE dis='$district'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "<div class='result-table'><table>
        <tr>
            <th>Cid</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Age</th>
            <th>Education</th>
            <th>State</th>
            <th>District</th>
            <th>Look</th>
        </tr>";

        while ($rows = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>".$rows['cid']."</td>
                <td>".$rows['fname']."</td>
                <td>".$rows['lname']."</td>
                <td>".$rows['age']."</td>
                <td>".$rows['edu']."</td>
                <td>".$rows['state']."</td>
                <td>".$rows['dis']."</td>
                <td>".$rows['look']."</td>
            </tr>";
        }

        echo "</table></div>";
    } else {
        echo "<h2 style='color:white;text-align:center;'>No Record Found</h2>";
    }

    mysqli_close($conn);
}
?>

</body>
</html>
