<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'info');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['again'];
	$city = $_POST['city'];

	if ($password != $password2) {
		echo "Your Password doesn't match";
	}
	else{
		$query = "INSERT INTO `person` (`name`, `email`, `password`, `city`) VALUES ('$name', '$email', '$password', '$city');";
		$inset = mysqli_query($connection, $query) or die(mysqli_error($connection));
	}
?>