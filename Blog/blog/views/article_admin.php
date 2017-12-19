<?php
error_reporting (0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Мій перший блог</title>
    </head>
    <body>
        <div class="container">
            <h1><a href="http://localhost/blog/">Мій перший блог</a></h1>
            
            <div>
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                
                <label>
                    Назва<br>
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label><br>
                <label>
                    Дата<br>
                    <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                </label><br>
                <label>
                    Стаття<br>
                    <textarea class="form-item" name="content" required>
                        <?=$article['content']?>
                    </textarea>
                </label><br>
                    <input type="submit" value="Зберегти" class="btn">
                    
                </form>
            </div>
                
        
            <footer>
                <p>Мій перший блог <br>
                Copiright &copy; 2015
                </p>
            </footer>
        </div>
    </body>
</html>