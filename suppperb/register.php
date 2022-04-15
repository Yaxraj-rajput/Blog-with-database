<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Here you go you are now joined')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Seems like something went wrong')</script>";
			}
		} else {
			echo "<script>alert('This account is already on supperb try another')</script>";
		}
		
	} else {
		echo "<script>alert('Incorrect password')</script>";
	}
}

?>

<!DOCTYPE html>
<html oncontextmenu="return false">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/logo.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>THE SUPPPERB</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Already a user? <a href="index.php">Go here</a>.</p>
			<p class="login-register-text">Register as author <a href="authreg.php"> here</a>.</p>
		</form>
	</div>



	<!----------Anti select query start---------->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>$('body').disableSelection();</script>
<!----------Anti select query end---------->
   


<!---------Anti inspect script start-------->

<script>
    document.onkeydown=function(e)
    {
        if(event.keyCode == 123)
        {
            return false;
        }

        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I' .charCodeAt(0))
        {
            return false;
        }

        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C' .charCodeAt(0))
        {
            return false;
        }

        if(e.ctrlKey && e.keyCode == 'U' .charCodeAt(0))
        {
            return false;
        }

        if(e.ctrlKey && e.keyCode == 'C' .charCodeAt(0))
        {
            return false;
        }
    }
</script>


<!---------Anti inspect script start-------->

</body>
</html>