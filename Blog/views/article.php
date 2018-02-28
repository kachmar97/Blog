<?php

    views_update($link, $_GET['id']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font/font-awesome.min.css">
        <title>Мій перший блог</title>
    </head>
    <body>
        <div class="container">
            <div class="mblog">
            <h1><a href="/">Мій перший блог</a></h1>
            </div>
            <div class="admin">
            <a href="/authorization/index.php">Вхід</a>
            <p style="display: inline-block;">|</p>
            <a href="/registration/reg.php">Реєстрація</a>
            <!-- <a href="admin">Панель адміністратора</a> -->
            </div>

            <div>
                <div class="article">
                    <h3><?=$articles['title']?></h3>
                    <div class="right">
                        <i class="icon-eye-open"></i>
                        <?=$articles['views']?>
                    </div>
                    <em>Опубліковано: <?=$articles['date']?></em>
                    <p>
                        <img src="https://placehold.it/260x260" alt="#">
                        <?=$articles['content']?>
                    </p>
                </div>
            </div>
        
            
        </div>
        <footer>
            <p>Мій перший блог <br>
                Copiright &copy; 2017
            </p>
        </footer>
    </body>
</html>