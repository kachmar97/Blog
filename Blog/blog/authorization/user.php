<?php
	if($_COOKIE['login']==""){
		header('Location: index.php');
		die;
	}else{
		echo "Ви ввійшли як ".$_COOKIE['login'];
	}
?>

<form action="exit.php" method="POST">
	<input type="submit" value="Вийти">
</form>