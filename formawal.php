<?php
<html>
<head>
	<title> jurnal 4 webdas</title>	
</head>
<body>
	<h1>SILAHKAN LOGIN DULU</h1>
	
	<form action="#" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		if ($username=="admin"&&$password="admin") {
			echo " LOGIN BERHASIL";
?>

	<a href="prosesta4.php" > LANJUT KE PROSES </a>
	
<?php  

		}else{
			echo "LOGIN GAGAL";
		}
		
	}

?>


?>
