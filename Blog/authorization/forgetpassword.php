<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<form action="mailsender.php" method="POST">
		<h1>Забули пароль?</h1>
		<div class="center">
		<input class="inp" type="email" required placeholder="Введіть ваш e-mail" name="email" style="display: block;" autofocus>
		<button type="submit" name="submit">
			Відновити
		</button>
		</div>
	</form>
</body>
</html>