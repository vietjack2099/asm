<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login-css/login.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style >
body
{
	font-family: 'Roboto', sans-serif;
	
	margin: 0;
	padding: 0;
}
</style>
<body>
<div class="Login-box">
	<div class="glass">
		
		<a><h3>Login</h3></a>
		<?php
		if(isset($_POST['User']) && isset ($_POST['Pass']))
		{
			require_once('./dbconnector.php');
            $conn = new DBConnector();
			$u = $_POST['User'];
			$p = $_POST['Pass'];
			$sql = "Select * From login Where user_name='".$u."' and pass_word ='". $p . "'";
			$rows = $conn->runQuery($sql);
			if(count($rows) > 0)
			{
				
				echo "Login successfully";
				header("Location:./manager.php");

			}
			else
			{
				echo "Login fail";
			}

		} 
		?>
		<form action="" method="Post">
			<div class="inputbox">
				<input type="text" name="User" placeholder="Username...">
				<span><i class="fa fa-user"></i></span>	
			</div>
			<div class="inputbox">
				<input type="password" name="Pass" placeholder="Password...">
				<span><i class="fa fa-unlock-alt"></i></span>	
			</div>
			<input type="submit" value="Login">
		</form>
		
		<a href="index.php">Back</a>
	</div>
</div>
</body>
</html>