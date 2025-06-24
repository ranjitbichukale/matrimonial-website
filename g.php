<?php
session_start();
include("connection.php"); //require="file name";
?>

<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
body {
    background-image: url('media/award.jpg');
    background-size: cover;
    background-position: center;
    font-family: 'Arial', sans-serif;
    height: 100vh; /* Make the body fill the full height of the viewport */
    margin: 0; /* Remove default margin */
    display: flex; /* Use Flexbox to center the form */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

#form {
    background-color: rgba(255, 255, 255, 0.8); /* Light faint background color with opacity */
    min-height: 700px;
    padding: 30px 40px;
    width: 500px; /* Set a fixed width for the form */
    border-radius: 20px; /* Rounded corners for the form background */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
}

.registration {
    font-size: 55px;
    font-family: Times New Roman;
    font-weight: 700;
    border-bottom-style: ridge;
    margin-bottom: 20px;
}

.text {
    height: 43px;
    border-radius: 10px; /* Rounded corners for input fields */
    border: 1px solid #ccc;
    padding-left: 10px;
}

label {
    font-size: 20px;
    font-weight: 600; /* Increased font weight for labels */
    margin-bottom: 10px;
}

.form-group {
    margin-bottom: 20px;
}

select.form-control, input.form-control {
    font-size: 16px; /* Slightly larger font size for input fields */
    border-radius: 10px; /* Rounded corners for input fields */
    border: 1px solid #ccc;
    padding-left: 10px;
}

.btn-primary {
    border-radius: 15px;
    padding: 10px;
    width: 35%; /* Reduced width for Submit button */
    font-weight: 700; /* Increased font weight for buttons */
    font-size: 18px;
}

.btn-danger {
    border-radius: 15px;
    padding: 10px;
    width: 35%; /* Reduced width for Reset button */
    font-weight: 700;
    font-size: 18px;
}

button {
    outline: none;
    border: none;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3" id="form">
<center><b class="registration">Registration Form</b></center>
<form method="POST">
<div class="form-group">
<label>Select Profile:</label>
<select name="pro" class="form-control text">
<option value="Self">Self</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Friend">Friend</option>
<option value="Relative">Relative</option>
</select>
</div>
<div class="form-group">
<label>First Name:</label>
<input type="text" name="fname" class="form-control text" placeholder="Enter First Name">
</div>
<div class="form-group">
<label>Middle Name:</label>
<input type="text" name="mname" class="form-control text" placeholder="Enter Middle Name">
</div>
<div class="form-group">
<label>Last Name:</label>
<input type="text" name="lname" class="form-control text" placeholder="Enter Last Name">
</div>
<div class="form-group">
<label>Date of Birth:</label>
<input type="text" name="dob" class="form-control text" placeholder="Enter Date of Birth">
</div>
<div class="form-group">
<label>Enter Religion:</label>
<select class="form-control text" name="relig">
<option value="Hindu">Hindu</option>
<option value="Muslim">Muslim</option>
<option value="Christian">Christian</option>
<option value="Parsi">Parsi</option>
<option value="Jain">Jain</option>
<option value="Buddhist">Buddhist</option>
<option value="No-Religion">No-Religion</option>
<option value="Other">Other</option>
</select>
</div>
<div class="form-group">
<label>Country:</label>
<select class="form-control text" name="cont">
<option value="India">India</option>
<option value="Pakistan">Pakistan</option>
<option value="America">America</option>
<option value="Japan">Japan</option>
<option value="UK">UK</option>
<option value="South-Africa">South-Africa</option>
<option value="Canada">Canada</option>
<option value="USA">USA</option>
</select>
</div>
<div class="form-group">
<label>Username:</label>
<input type="text" name="uname" class="form-control text" placeholder="Enter Username" required>
</div>
<div class="form-group">
<label>Password:</label>
<input type="text" name="pass" class="form-control text" placeholder="Enter Password" required>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit" name="submit">
<input type="reset" class="btn btn-danger" value="Reset">
</div>
</form>
</div>
</div>
</div>
</body>
</html>

<div>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
  $pr = $_POST['pro'];  
  $fn = $_POST['fname'];
  $mn = $_POST['mname'];
  $ln = $_POST['lname']; 
  $db = $_POST['dob'];
  $rel = $_POST['relig'];
  $con = $_POST['cont'];
  $un = $_POST['uname'];
  $ps = $_POST['pass'];

  $sql = "INSERT INTO regi(profile, fname, mname, lname, dob, religion, country, username, password, regidate)
          VALUES('$pr', '$fn', '$mn', '$ln', '$db', '$rel', '$con', '$un', '$ps', NOW())";
  if(mysqli_query($conn, $sql))
  {
     echo "Record inserted successfully";
     ?>
     <script>window.location.href="l.php";</script>
     <?php
  }
  else
  {
     echo mysqli_error($conn);     
  }
  mysqli_close($conn);
}
?>
</div>
