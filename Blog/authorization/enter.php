<?php
	require_once("../database.php");

    $db = db_connect();
	//$db = mysqli_connect('mysql.hostinger.com.ua', 'u207679091_root', '1234554321', 'u207679091_db') or DIE ('Не вдалося підключитися до бази даних');
	session_start();
	
	if (!isset($_SESSION['login'])){
		$login = htmlspecialchars($_POST['login']);
		$password=htmlspecialchars($_POST['password']);

		$result = mysqli_query($db,"SELECT * FROM users WHERE login='$login'");
		$myrow = mysqli_fetch_assoc($result);

		if($myrow['password']==""){
			echo "<div style='background: red; text-align: center; color: white; font-weight: bold;'>Такого логіну не існує!!!</div>";
			include 'index.php';

		}else{
		    $query = "SELECT `id` , `login` FROM `users` WHERE login = '$login' AND password = SHA('$password')";
			$data = mysqli_query($db,$query);
			if(mysqli_num_rows($data) == 1) {
				setcookie("login", $myrow['login'], time()+3600);
				echo "
					<script language='JavaScript' type='text/JavaScript'>
					function GoExit(){
						location='../admin';
					}
					setTimeout('GoExit()', 2000);
					</script>
					";
				echo "<div style='background: green; text-align: center; color: white;'>Ви ввійшли як <b>".$myrow['login']."</b>.</div>";	
				include 'index.php';

			}else{
				echo "<div style='background: red; text-align: center; color: white; font-weight: bold;'>Не вірний логін та/або пароль!!!</div>";
				include 'index.php';
			}
		}
	}
	
?>