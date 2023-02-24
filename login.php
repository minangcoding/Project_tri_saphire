<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<style type="text/css">
		#login-form {
			width: 400px; /* sesuaikan lebar form login dengan gambar */
			margin: 0 auto; /* posisikan form login di tengah halaman */
			background-color: #f1f1f1;
			padding: 20px;
			border-radius: 5px;
		}
		#login-form img {
			display: block; /* pastikan gambar muncul dalam bentuk block */
			margin: 0 auto; /* posisikan gambar di tengah form login */
			width: 100%; /* gambar akan menyesuaikan lebar form login */
			max-width: 400px; /* batasi lebar gambar agar tidak melebihi lebar form login */
			height: auto; /* tinggi gambar akan menyesuaikan lebar */
			margin-bottom: 20px; /* berikan jarak antara gambar dan form login */
		}
	</style>
</head>
<body>
	<div id="login-form">
		<img src="pages/img/tri_logo.jpg" alt="gambar login" />
		<form method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" />
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" />
			<input type="submit" value="Login" />
		</form>
	</div>
</body>
</html>
