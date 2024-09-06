<html>
<head>
	<link rel="stylesheet" href="pagestyle.css">
	<title>Login Page</title>
</head>
<body>
<div class="login-body">
	<div class="login">
		<h1>LOGIN</h1>
		<p>Don't have an account? <a href="signup1.php">Create Your Account</a></p>
		<div class="inputs">
		<form method="post">
			<p>Username</p>
			<input type="text" name="un" id="name" placeholder="Enter User id">
			<p>Password</p>
			<input type="password" name="ps" placeholder="Enter Password">
			<input type="submit" name="su" value="Login">
			<a href="forget.html">Forgot Password?</a><br>
		</form>
		</div>
	</div>
</div>
<?php
	if(isset($_POST['su']))
	{
	$un=$_POST['un'];
	$ps=$_POST['ps'];
	$servername="localhost";
	$username="root";
	$password="suraj1234";
	$database="event";
	$conn=mysqli_connect($servername,$username,$password,$database);
	$q1="select * from signup1 where uname='$un' and upass='$ps'";
	$r=$conn->query($q1);
	if(mysqli_num_rows($r)>0)
		header('Location:services.html');
	}
?>
</body>
</html>