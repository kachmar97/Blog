<?php

	require "db.php";
?>

<?php	if(isset($_SESSION['logged_user'])) :?>
Авторизований! <br>
Привіт, <?php echo $_SESSION['logged_user']->login;?>!
<hr>
<a href="/logout.php">Вийти</a>
<?php else : ?>
<a href="/login.php">Авторизація</a><br>
<a href="/signup.php">Реєстрація</a>
<?php endif;?> 