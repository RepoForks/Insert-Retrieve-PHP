<!DOCTYPE html>
<html>
<head>
	<title>Insertion & Deletion</title>
</head>
<body>
	<h1>Insert</h1>
		<form method="post" action="register.php">
			<input type="text" name="name" placeholder="Name">
			<br>
			<br>
			<input type="email" name="email" placeholder="Email">
			<br><br>
			<input type="password" name="password" placeholder="Password">
			<br><br>
			<input type="password" name="again" placeholder="Password again">
			<br><br>
			<input type="text" name="city" placeholder="City">
			<br><br>
			<input type="submit">
		</form>
	<h1>Retriving</h1>
	<ul>
		<?php 
			define('DB_HOST', 'localhost');
			define('DB_NAME', 'info');
			define('DB_USER', 'root');
			define('DB_PASS', '');

			$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);		

			$query = "SELECT * FROM person";
			
			$result = mysqli_query($connection, $query);

			foreach ($result as $row) {
				echo "<li>".$row['name']." - ".$row['email']." - ".$row['city']."</li>";
			}
		?>
	</ul>
</body>
</html>