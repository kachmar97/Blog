<?php
	require "db.php";

	$data=$_POST;
	if (isset($data['do_signup']))
	{
		$errors = array();
		if (trim($data['login'])=='')
		{
			$errors[] = 'Введіть логін';
		}
		
		if (trim($data['email'])=='')
		{
			$errors[] = 'Введіть email';
		}
		
		if ($data['password']=='')
		{
			$errors[] = 'Введіть пароль';
		}
		
		if ($data['password_2']!=$data['password'])
		{
			$errors[] = 'Повторний пароль введено невірно';
		}

		if (R::count('users', "login = ?", array($data['login'])) > 0)
		{
			$errors[] = "Користувач з таким ім’ям вже існує";
		}


		if (R::count('users', "email = ?", array($data['email'])) > 0)
		{
			$errors[] = "Користувач з таким email вже існує";
		}

		if (empty($errors))
		{
			$user = R::dispense('users');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = md5($data['password']);
			R::store($user);
			echo '<div style="color: green">Ви успішно зареєструвалися<br><a href="/">Головну</a></div>';

		}else
		{
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}

	}

?>

<form action="signup.php" method="POST">
	
	<p>
		<p><strong>Ваш логін</strong></p>
		<input type="text" name="login" value="<?php echo $data['login'];?>">
	</p>

	<p>
		<p><strong>Ваш email</strong></p>
		<input type="email" name="email" value="<?php echo $data['email'];?>">
	</p>

	<p>
		<p><strong>Ваш пароль</strong></p>
		<input type="password" name="password" value="<?php echo $data['password'];?>">
	</p>

	<p>
		<p><strong>Введіть ваш пароль ще раз</strong></p>
		<input type="password" name="password_2" value="<?php echo $data['password_2'];?>">
	</p>
	<p>
	<button type="submit" name="do_signup">Зареєструватися</button>
	</p>

</form>