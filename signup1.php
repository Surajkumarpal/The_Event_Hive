<!DOCTYPE html>
<html lang="en" >
<head>
	<link rel="stylesheet" href="pagestyle.css">
	<title>Signup Page</title>
</head>
<body>
<div class="signup-body">
	<div class="signup">
		
		<h1>SIGN UP</h1>
		<form method="post">
		<input type="text" name="us" id="username" placeholder="Enter Username"><br>
		<input type="text" name="em" id="email" placeholder="Enter Your Email"><br>
		<input type="tel" name="ph" id="phone" placeholder="Enter Your Mobile No."><br>
		<input type="password" name="ps" placeholder="Enter Password"><br>
		<input type="submit" name="su" value="Create Account">
		</form>
	</div>
</div>
<?php
  if(isset($_POST['su']))
{
	$servername="localhost";
	$username="root";
	$password="suraj1234";
	$database="event";
	$conn=mysqli_connect($servername,$username,$password,$database);
	$uname=$_POST['us'];
	$umail=$_POST['em'];
	$uphone=$_POST['ph'];
	$upass=$_POST['ps'];
	$instr="insert into signup1 values('$uname','$umail','$uphone','$upass')";
	mysqli_query($conn,$instr);
	header('Location:login1.php');
}
?>
</body>
</html>

