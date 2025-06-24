<!DOCTYPE html>
<html>
<head>
    <title>Search by Profession</title>
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
            padding: 25px;
            border-radius: 10px;
            border: 2px solid #000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 12px;
            font-size: 16px;
        }

        input[type="text"] {
            padding: 10px;
            width: 95%;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }

        input[type="submit"], input[type="reset"] {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
        }

        input[type="reset"] {
            background-color: #dc3545;
            color: white;
        }

        h2 {
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 4px #000;
            margin-top: 40px;
        }

        .result-table {
            margin: 30px auto;
            background-color: rgba(255, 255, 255, 0.9);
            width: 90%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .result-table th, .result-table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        .result-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Search by Profession</h2>

<div class="form-container">
    <form action="" method="POST">
        <table>
            <tr>
                <td>Enter Profession:</td>
                <td><input type="text" name="pro" required></td>
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
    $profession = $_POST['pro'];
    $sql = "SELECT * FROM regi WHERE profession='$profession'";
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
