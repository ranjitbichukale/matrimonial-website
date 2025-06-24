<?php
session_start();
include("connection.php"); //require="file name";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style>
body{
                
                background-color:lightgreen;
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
				background-size:cover;
			    padding-top:100px;
    }
</style>
    </head>
    <body>
	<center>
	<div class="form-bg">
           <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>REGISTER HERE!!!</h3>
                            </div>
                            <div class="panel-body">
                                <p>Register to make a purchase.</p>
                                <form action="" method="POST">
								    <div class="form-group">
                                        <input type="text" class="form-control" name="pro" placeholder="profile">
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="fname" placeholder="First Name">
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="mname" placeholder="Middle Name">
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="dob" placeholder="Date Of Birth">
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="relig" placeholder="Religion">
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="cont" placeholder="country">
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="uname" placeholder="usename">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="submit" name="submit">
										<input class="btn btn-danger" type="reset" value="cancel"></td></tr>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
				</div>
				</div>
				</body>
				</html>
				</center>
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
  
  $sql = "insert into regi(profile,fname,mname,lname,dob,religion,country,username,password,regidate)values('$pr','$fn','$mn','$ln','$db','$rel','$con','$un','$ps',now())";
  if(mysqli_query($conn,$sql))
  {
     echo "Record inserted successfully";
  }
  else
  {
     echo mysqli_error($conn); 	  
  }
     mysqli_close($conn);
	 }
?>
</body>
</html>
 
           
