<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="s.css">
        <title>Мій перший блог</title>
    </head>
    <body>
        <div class="container">
            <div class="mblog">
            <h1><a href="http://localhost/blog/">Мій перший блог</a></h1>
            </div>
            <div class="admin">
            <a href="admin">Панель адміністратора</a>
            </div>
            <div>
                <?php foreach($articles as $a):?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубліковано: <?=$a['date']?></em>
                    <hr>
                    <p><?=articles_intro($a['content'])?></p>
                </div>
                <?php endforeach ?>
            </div>
        
            <footer>
                <p>Мій перший блог <br>
                Copiright &copy; 2017
                </p>
            </footer>
        </div>
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    </body>
</html>