
<?php	include("../database.php");

    $db = db_connect();
	//$db = mysqli_connect('mysql.hostinger.com.ua', 'u207679091_root', '1234554321', 'u207679091_db') or DIE ('Не вдалося підключитися до бази даних');
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	if(isset($_POST['submit']))
	{
	    $query = mysqli_query($db, "SELECT * FROM users WHERE login = '$login' OR email = '$email'");
		$result = mysqli_num_rows($query);

		if($result==0){
    	    if($password1==$password2){
        		$query = "INSERT INTO users (login, password, email) VALUES ('$login', SHA('$password1'), '$email')";
        		mysqli_query($db, $query);
        		echo "
					<script language='JavaScript' type='text/JavaScript'>
					function GoExit(){
						location='/authorization';
					}
					setTimeout('GoExit()', 2500);
					</script>
					";
				echo "<div style='background: green; text-align: center; color: white;'>Ви успішно зареєстровані</div>";
    	    }else{
    	        echo "Паролы не спывпадають";
    	    }
		}else{
		    echo "<div style='background: red; text-align: center; color: white; font-weight: bold;'>Користувач з таким логіном або email вже зареєстрований!!!</div>";
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<form action="reg.php" method="POST">
		<h1>Реєстрація</h1>
		<input class="inp" placeholder="Введіть логін" type="text" name="login" required autofocus><br>
		<input class="inp" placeholder="Введіть e-mail" type="email" name="email" required><br>
		<input class="inp" placeholder="Введіть пароль" type="password" name="password1" required><br>
		<input class="inp" placeholder="Повторіть введений пароль" type="password" name="password2" required><br>
		<button type="submit" name="submit">Зареєструватися</button>
		<a href="../authorization" class="auth">Авторизуватися</a>
	</form>
</body>
</html>