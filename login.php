<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			$temp=mysqli_fetch_array($result);
			$_SESSION['admin'] = $temp["head"];
			$_SESSION['id']= $temp["id"];
			$_SESSION['email']= $temp["email"];
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="container">

<div class="row">
<div class="col-sm-4">
</div>	

<div class="col-sm-4">
			<div class="form form-horizontal">
			<h1>Log In</h1>
					<form action="" method="post" name="login">
						<div class="form-group">	
							<label>Username: <input class="form-control" type="text" name="username" placeholder="Username" required /> </label>
						</div>
						<div class="form-group">
							<label>Password: <input class="form-control" type="password" name="password" placeholder="Password" required /></label>
						</div>
						<div  class="form-group">
							<div class="col-sm-4">	
								<input class="form-control" name="submit" type="submit" value="Login" />
							</div>
						</div>
					</form
					<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />
			</div>
</div>
<div class="col-sm-4">
</div>	
</div>
<?php } ?>


</body>
</html>
