<html>
<body bgcolor="#FF00FF">
<form action="" method="POST">
 <table border=3 align=center>
 <tr><td>Enter Employee Id</td>
 <td><input type="text" name="eid" placeholder="Enter Eid to be deleted"></td></tr>
 <tr><td><input type="submit" value="submit" name="submit"></td>
 <td><input type="reset" value="cancel"></td></tr>
</form>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
  $ei = $_POST['eid']; 
  $sql = "delete from admin where eid=$ei";
  if(mysqli_query($conn,$sql))
  {
     echo "Record deleted successfully";
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
  