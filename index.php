<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>


<form action="login.php" method="post">
<div class="kotak_login">
	<p class="tulisan_login">Silahkan login</p>

	<form>
		<label>Username</label>
		<input type="text" name="username" class="form_login" placeholder="Username atau email ..">

		<label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="Password ..">

		<input type="submit" class="tombol_login" value="LOGIN">

		<br/>
		<br/>
	</form>
	
</div>
</form>    
</body>
</html>