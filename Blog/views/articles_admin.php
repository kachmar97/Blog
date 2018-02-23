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
            <div class="content">
                <a href="index.php?action=add">Додати статтю</a>
                <div class="article">
                    <table class="admin-table">
                        <tr>
                            <th>Дата</th>
                            <th>Заголовок</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php foreach($articles as $a):?>
                        <tr>
                            <td><?=$a['date']?></td>
                            <td><?=$a['title']?></td>
                            <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редагувати</a></td>
                            <td><a href="index.php?action=delete&id=<?=$a['id']?>">Видалити</a></td>
                        </tr>
                         <?php endforeach ?>
                    </table>
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