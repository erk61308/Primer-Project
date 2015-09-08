<?php
	if (isset($_POST['login'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$conn = mysqli_connect('localhost', 'root', 'moorpark', 'CS490EX')
			or die('Connection to DB server could not be established.');
		$query = "SELECT * FROM user "
			. "WHERE user = '$user'";
		$result = mysqli_query($conn, $query)
			or die('Query error.');
		mysqli_close($conn);
		$valid_login = false;	
	}
?>		

<html>
	<head>
		<meta charset = "utf-8" />
		<title>pp</title>
		<script type = "text/javascript">
		</script>
		<body>
			<form id="login"
			action="<?php echo $_SERVER['PHP_SELF']; ?>"
			method="post">
				<label for="user">User:</label>
				<input type="text" id="user" name="user" /><br />
				<label for="pass">Pass:</label>
				<input type="password" id="pass" name="pass" /><br />
				<a href="register.php">Register</a>
				<input type="submit" id="login" name="login" value="Login" />
			</form>
		</body>
</html>