<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/admin.css">
        <title>Мій перший блог</title>
    </head>
    <body>
        <div class="container">
            <div class="mblog">
                <h1><a href="/">Мій перший блог</a></h1>
            </div>
            <div>
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    Назва<br>
                    <input class="inp" type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required><br>
                    Стаття<br>
                    <textarea class="form-item" name="content" rows="10" required><?=trim($article['content'])?></textarea><br>
                    <button type="submit" name="save">Зберегти</button>
                </form>
            </div>
        </div>
        <footer>
            <p>Мій перший блог <br>
                Copiright &copy; 2017
            </p>
        </footer>
        
    </body>
</html>