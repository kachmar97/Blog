<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<!--         <link rel="stylesheet" href="style.css"> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styl.css">
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
                <?php foreach($articles as $a):?>
                <div class="article">
                        <h3>
                            <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
                        </h3>
                        <div class="right">
                            <?=$a['views']?>
                         </div>
                    <em>Опубліковано: <?=$a['date']?></em>
                    <hr>
                        <div class="textandphoto">
                            <p>
                                <img src="https://placehold.it/120x120" alt="#">
                                <?=articles_intro($a['content']).'...'?>
                            </p>
                        </div>
                </div>
                <?php endforeach ?>
            </div>
        
            <footer>
                <p>Мій перший блог <br>
                Copiright &copy; 2017
                </p>
            </footer>
        </div>
    </body>
</html>