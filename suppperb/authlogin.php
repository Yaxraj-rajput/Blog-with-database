<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: contact.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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

	<title>Login as author| THE SUPPPERB</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Author Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Wanna be a author? <a href="authreg.php">Register Here</a>.</p>
            <p class="login-register-text">Login as reader  <a href="index.php">Here</a>.</p>
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
