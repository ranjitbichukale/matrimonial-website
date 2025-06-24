

<html>
<head>
<style>
{
  box-sizing:border-box;
  font-family:Arial,Helvetica,sans-serif;
}
body
{
  margin:0px;
  font-family:Times New Roman;  
}
.top
{
  overflow:hidden;
  background-color:#FF1493;
  height:100px;
  text-align:center;
  font-size:35px;
}
.top a
{
  float:left;
  display:flex;
  color-blue;
  text-align:center;
  padding:14px 16px;
  text-decoration:none;
}
.top a:hover
{
  background-color:red;
  color:black;
}
.b{
   background-color:#789DEC;
   height:50px;
   padding-top:20px;
 
}

 .b a{
     text-align:center;
    
 }
 ul{
     List-style:none;
     background:#551A8B;
 }
 ul li{
    display:inline-block;
    position:relative;
 }
 ul li a{
     display:block;
     padding:20px 25px;
     color:#FFF;
     text-decoration:none;
     text-align:center;
     font-size:20px;
 }
 ul li ul.dropdown{
     display:block;
 }
 ul li ul.dropdown{
     width:100%;
     background:#AB82FF;
     position:absolute;
     z-index:999;
     display:none;
 }
 ul li a:hover{
     background:#FF6347;
 }
 ul li:hover ul.dropdown{
     display:block;
 }
 .s{
	 align:center:
	 padding-top:100px;
 }
 body{
                
                background-image:url("shadi3.jpg");
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
            }
        
 </style>
    </head>
    <body bgcolor="#1E90FF">
        
                                <div class="top"><center>
                       <?php
include("connection.php");
session_start();
$username=$_SESSION["username"];
  $sql = "select * from regi where username='$username'";
   $result = mysqli_query($conn,$sql);

	 $row=mysqli_fetch_assoc($result);
	 $image = $row['image'];
	 
	 
echo "welcome ".$_SESSION["username"];
</div>
?>
<div class="s">
<img src="photo/userphoto/<?php echo$image;?>"height=70 width=70>
</div>
<?php
echo "<br>";
?>
       
                                
                                
                               
                                <ul>
                                    <li><a href="eg.php">Edit</a></li>
                                    <li><a href="profile.php">Check MY Profile</a></li>
                                    <li><a href="match.php">Check My Match</a></li>
                                    <li>
                                <a href="#">Find</a>
                                <ul class="dropdown">
                                    <li><a href="district.php">District</a></li>
                                    <li><a href="name.php">Name</a></li>
                                    <li><a href="profession.php">Profession</a></li>
                                </ul>
								    <li><a href="all.php">All info</a></li>
									<li><a href="photo.php">My Photos</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
									<li><a href="login.php">Logout</a>  </li>
                                    </li>
                                    <li>
                                               
            
                 
    </body>
</html>
