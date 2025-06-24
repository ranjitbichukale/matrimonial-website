
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shaddi";
  
  $conn = new mysqli($servername,$username,$password,$dbname);
  if(!$conn)
  {
     die("connection failed".mysqli_connect_error());
  }
  //echo "Connected successfully";
?>
