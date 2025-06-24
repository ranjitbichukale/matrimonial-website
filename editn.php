<?php
include("connection.php");
session_start();

// Fetch user data from the session
$username = $_SESSION["username"];
$sql = "SELECT * FROM regi WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Assigning all fields
extract($row); // Safer: You can use $row['fname'], etc. too
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('sh6.jpg'); /* Set background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Segoe UI', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #form {
            background-color: rgba(255, 253, 208, 0.8); /* Semi-transparent background */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            width: 90%; /* Adjust width for responsiveness */
            max-width: 900px;
        }

        .registration {
            font-size: 32px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 25px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .form-group label {
            font-size: 16px;
            font-weight: 500;
            color: #000;
        }

        .form-control {
            border-radius: 8px;
            font-size: 15px;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.6);
        }

        .btn {
            border-radius: 10px;
            font-size: 16px;
            padding: 10px;
            width: 48%;
        }

        img {
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #444;
        }

        @media (max-width: 768px) {
            .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
<div class="container">
    <div class="col-md-10 offset-md-1" id="form">
        <div class="registration">Update Your Profile</div>
        <form method="POST" enctype="multipart/form-data">
            <?php
            $fields = [
                "profile", "fname", "mname", "lname", "dob", "religion", "country", "username",
                "password", "age", "gender", "bg", "cast", "family", "edu", "profession",
                "aincome", "property", "mob", "address", "state", "dis", "look", "color"
            ];

            foreach ($fields as $field) {
                echo '<div class="form-group">
                        <label>' . ucfirst($field) . ':</label>
                        <input type="text" name="' . $field . '" class="form-control" value="' . $row[$field] . '" required>
                      </div>';
            }
            ?>
            <div class="form-group">
                <label>Image:</label><br>
                <img src="photo/userphoto/<?php echo $image; ?>" height="50" width="50">
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group d-flex justify-content-between">
                <input type="submit" class="btn btn-primary" name="submit" value="Update">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    // Collect form data
    $imageUpdate = "";
    foreach ($fields as $field) {
        $$field = mysqli_real_escape_string($conn, $_POST[$field]);
    }

    // Image upload handling
    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $ph = $_FILES['image']['tmp_name'];
        move_uploaded_file($ph, "photo/userphoto/$image");
        $imageUpdate = ", image='$image'";
    }

    // Update query
    $sql = "UPDATE regi SET 
            profile='$profile', fname='$fname', mname='$mname', lname='$lname',
            dob='$dob', religion='$religion', country='$country', password='$password',
            age='$age', gender='$gender', bg='$bg', cast='$cast', family='$family',
            edu='$edu', profession='$profession', aincome='$aincome', property='$property',
            mob='$mob', address='$address', state='$state', dis='$dis', look='$look',
            color='$color' $imageUpdate WHERE username='$username'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Profile updated successfully!'); window.location.href = 'success.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    mysqli_close($conn);
}
?>
