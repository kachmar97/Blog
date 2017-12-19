<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <title>Мій перший блог</title>
    </head>
    <body>
        <div class="container">
            <h1><a href="http://localhost/blog/">Мій перший блог</a></h1>
            <a href="admin">Панель адміністратора</a>
            <div>
                <?php foreach($articles as $a):?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубліковано: <?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?></p>
                </div>
                <?php endforeach ?>
            </div>
        
            <footer>
                <p>Мій перший блог <br>
                Copiright &copy; 2015
                </p>
            </footer>
        </div>
    </body>
</html>