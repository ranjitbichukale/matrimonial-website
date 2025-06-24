<?php
session_start();
include("connection.php"); //require="file name";
?>
<html>
<head>
<style>
body{
                
                background-image:url("s1.jpg");
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
    }
</style>
</head>
<body bgcolor="#FF1493">
<form action="" method="POST">
<table border=3 align="center" cellspadding=2>
<tr><td>Enter Username</td>
<td><input type="text" placeholder="Username" name="un"></td></tr>
<tr><td>Enter Password</td>
<td><input type="text" placeholder="Password" name="ps"></td></tr>
<tr align=center>
<td><input type="submit" value="submit" name="submit">
<td><input type="reset" value="cancel"></td></tr>

</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
   $username = $_POST['un'];
   $password = $_POST['ps'];
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
<script>
window.location.href="success2.php";
</script>
<?php
   }
   }
}
?>   