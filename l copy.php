<?php
session_start();
include("connection.php"); //require="file name";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style>
body{
                
                background-image:url("sh3.jpg");
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
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Login to make a purchase.</p>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="submit" name="submit">
										<input class="btn btn-danger" type="reset" value="cancel"></td></tr>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="g.php">Register</a></div>
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
if(isset($_POST['submit']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
   if(!$username || !$password)
   {
      echo"Username and Password Empty";
   }
   else
   {
      $sql = "select * from regi where username='$username' and password='$password'";
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);
      if($num==0)
      {
         echo "No user found";
      }
      else
      {
          $row = mysqli_fetch_assoc($result);
          $username = $row['username'];
          $_SESSION["username"]=$username;
?>
</div>
<script>
window.location.href="success.php";
</script>
<?php
   }
   }
}
?>              
           
