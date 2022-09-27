<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Login Page</title>
  <style>
    #btn-show {
  width: 1px;
  height: 1px;
  position: relative;
  top: -42px;
  left: 280px;
  appearance: none;
  outline: none;
  border: none;
  transform: 0.5s ease;
  cursor: pointer;
  background-image: url("hide.png");
  background-size: cover;
}
#btn-show:checked {
  background-image: url("show.png");
  background-size: cover;
}
@media (max-width: 430px) {
    #btn-show {
        left:185px;
    }
}
  </style>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" class="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <input type="checkbox" id="btn-show">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
        
	</div>
    <script src="script.js"></script>
</body>
</html>
