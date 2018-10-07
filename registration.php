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
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$phone = $_POST['phone'];
		$head = $_POST['head'];
        $query = "INSERT into `users` (username, password, email, phone, head) VALUES ('$username', '".md5($password)."', '$email','$phone', '$head')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="text" name="phone" placeholder="Phone No." required />
Head
<input type="radio" name="head" value="Yes">Yes 
<input type="radio" name="head" value="No" checked>No
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />
</div>
<?php } ?>
</body>
</html>
