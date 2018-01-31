<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<form action="enter.php" method="POST">
		<h1>Авторизація</h1>
		<div class="center">
		<input class="inp" type="text" required placeholder="Введіть логін" name="login" style="display: block;" autofocus>
		<input class="inp" type="password" required placeholder="Введіть пароль" name="password" style="display: block;">
		<button type="submit">
			Ввійти
		</button>
		<a href="/registration/reg.php">Реєстрація</a>
		<!-- <input class="btn" type="submit" value="Ввійти"> -->
		</div>
	</form>
</body>
</html>