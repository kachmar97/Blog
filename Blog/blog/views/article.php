<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
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
                <div class="article">
                    <h3><?=$articles['title']?></h3>
                    <em>Опубліковано: <?=$articles['date']?></em>
                    <p><?=$articles['content']?></p>
                </div>
            </div>
        
            <footer>
                <p>Мій перший блог <br>
                Copiright &copy; 2017
                </p>
            </footer>
        </div>
    </body>
</html>