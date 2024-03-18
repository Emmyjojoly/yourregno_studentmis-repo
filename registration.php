<title>Form to Register</title>
<?php 
if(isset($_POST['submit'])){ 
$dbconn=mysqli_connect("mysql_app","root","","schooldb"); // Database connetion 
// inserting in Database 
$firstname=$_POST['names']; 
$lastname=$_POST['email']; 
$regno=$_POST['pasword']; 

$sql="INSERT INTO bl_student SET names='$names',  
email='$email',pasword='$pasword'"; 
$quer =mysqli_query($dbconn,$sql); 
header("location:table.php"); 
} ?> 
<!DOCTYPE html> <html> <head>  <title> Form to Register</title> 


		</style>
        <div>

</head>  <body background="f.PNG">  <table> <form action="" method="POST"> 
<tr><td><b style="font-family:Juice ITC;font-size: 20px;color:  black"> Names</b></td><td><input type="text" name="firstname"  class="y"></td></tr> 


<tr><td><b style="font-family:Juice ITC;font-size: 20px;color:  black">email</b></td><td><input type="text" name="lastname" class="y"></td></tr> 
<tr><td><b style="font-family:Juice ITC;font-size: 20px;color:  black">password</b></td><td><input type="text" name="regno" class="y"></td></tr> 

<tr><td><input type="submit" name="submit" id="p"></td> 
<td><a  href="table.php" id="p">View</a></td></tr> 
</div>
</form> </table></body> </html> 
  