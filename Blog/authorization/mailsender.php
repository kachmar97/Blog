<?php
require_once("../database.php");
require_once("../models/articles.php");

    $db = db_connect();
if(isset($_POST['submit']))
	{
	    $email = htmlspecialchars($_POST['email']);
		$result = mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
		$myrow = mysqli_fetch_assoc($result);

		if($myrow['email']==""){
			echo "<div style='background: red; text-align: center; color: white; font-weight: bold;'>Користувача з таким e-mail не знайдено!!!</div>";
			include 'forgetpassword.php';
		
			
		}else{
		    $passwordnew = generatePassword(15);
		    $message = "Ваш новий пароль <b> $passwordnew </b>";
        	$to = $_POST['email'];
        	$subject = "Відновлення паролю";
        	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
        	$from = "kachmaroleg@justmyblog.xyz";
        	$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";
        	mail($to, $subject, $message, $headers);
        	
        	$query = "UPDATE users SET password = SHA('$passwordnew') WHERE email = '$email'";
        	mysqli_query($db, $query);
        	
        	echo "<div style='background: green; text-align: center; color: white;'>Новий пароль відправлено на <b>".$myrow['email']."</b>.</div>";	
        	echo "
					<script language='JavaScript' type='text/JavaScript'>
					function GoExit(){
						location='index.php';
					}
					setTimeout('GoExit()', 2000);
					</script>
					";
				
				include 'index.php';
		}
	}
		
?>