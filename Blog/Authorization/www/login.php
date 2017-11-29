<?php
	require "db.php";

	$data=$_POST;
	if (isset($data['do_login']))
	{
		$errors = array();
		$user = R::findOne('users', 'login = ?',array($data['login']));
		if($user)
		{
			if(md5($data['password'], $user->password)){
				// користувач авторизований
				$_SESSION['logged_user'] = $user;
				//require "ss.php";
				//exit();
				echo '<div style="color: green">Ви авторизовані<br>Перейти на <a href="/">головну</a>сторінку</div><hr>';
			}else
			{
				$errors[] = 'Невірно введений пароль';
			}
		}else
		{
			$errors[] = 'Не знайдено користувача з таким логіном';
		}
		if (!empty($errors))
		{
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}

	}

?>

<form action="login.php" method="post">
	<p>
		<p><strong>Логін</strong></p>
		<input type="text" name="login" value="<?php echo $data['login'];?>">
	</p>

	<p>
		<p><strong>Пароль</strong></p>
		<input type="password" name="password" value="<?php echo $data['password'];?>">
	</p>

	<p>
	<button type="submit" name="do_login">Login</button>
	</p>

</form>