<html>
<head>
<body bgcolor="#FF1493">
        <form action ="" method="POST">
        <table border="3" align="center">
                     <tr><td>Age</td>
                     <td><select name="age">  
                <option value=" " selected>
                --------select----------</option> 
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>                    
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                </select></td>
                </tr>
                <tr><td>gender</td>
                    <td><input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male</td>
                </tr>
                <tr><td>Cast</td>
                    <td><select name="cast">     
                <option value=" " selected>
                --------select----------</option>   
                <option value="open">Open</option>
                <option value="sc">SC</option>
                <option value="nt">NT</option>
                <option value="st">ST</option>
                <option value="obc">OBC</option>    
                </select></td></tr>
               
                <tr><td>Education</td>
                <td><select name="education">  
                <option value=" " selected>
                --------select----------</option>   
                <option value="ba">BA</option>
                <option value="ma">MA</option>
                <option value="bcom">B-COM</option>
                <option value="mcom">M-COM</option>
                <option value="bsc">BSC</option>
                <option value="msc">MSC</option>
                <option value="bca">BCA</option>   
                <option value="mca">MCA</option>    
                <option value="bcs">BCS</option>   
                <option value="diploma">Diploma</option>
                <option value="engineer">Engineer</option>  
                <option value="phd">PHD</option>   
                </select></td></tr>
                <tr><td>State</td>        
                    <td><select name="state"> 
                <option value=" " selected>
                --------select----------</option>   
                <option value="mah">Maharashtra</option>
                <option value="pun">Punjab</option>
                <option value="guj">Gujrat</option>
                <option value="karnataka">Karnatka</option>
                <option value="raj">Rajstan</option>  
                </select></td> </tr>  
                <tr><td>District</td>        
                    <td><select name="district">     
                <option value=" " selected>
                --------select----------</option>   
                <option value="kolhapur">Kolhapur</option>
                <option value="pune">Pune</option>
                <option value="sangali">Sangali</option>
                <option value="satara">Satara</option>
                <option value="Belgaon">Belgaon</option>  
                </select></td>
                </tr>
                <tr><td>Looking for</td>        
                <td><select name="look">    
                <option value=" " selected>
                --------select----------</option>   
                <option value="fair">Fair</option>
                <option value="simple">Simple</option>
                <option value="smart">Smart</option>
                <option value="hadsome">Handsome</option>
                <option value="glamourus">Glamourus</option>  
                </select></td>
                </tr>
				<tr align=center>
                <td><input type="submit" value="submit" name="submit"></td>
                <td><input type="reset" value="cancel"></td>
            
        </form>
		</table>
		<br>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $cast = $_POST['cast'];
   $education = $_POST['education'];
   $state = $_POST['state'];
   $district = $_POST['district'];
   $look = $_POST['look'];
   $sql = "select * from regi where age=$age and gender='$gender' and cast='$cast' and edu='$education' and dis='$district' and look='$look'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   if($count>0)
   {
	   echo "<html>
	   <body>
	   <table border=2 align=center padding=2>
	   <tr><th>Age</th>
	       <th>Gender</th>
		   <th>Cast</th>
		   <th>Education</th>
		   <th>State</th>
		   <th>District</th>
		   <th>Look</th>
		   <th>View all</th>
	   </tr>";
      while($rows=mysqli_fetch_assoc($result))
      {
		 
         echo "<tr><td>".$rows['age']."</td><td>".$rows['gender']."</td><td>".$rows['cast']."</td><td>".$rows['edu']."</td><td>".$rows['state']."</td><td>".$rows['dis']."</td><td>".$rows['look']."</td></tr>";
      
	  }
   }
else
{
   echo "No Record Found";
}
}  
mysqli_close($conn);

?>

</body>
		</html>