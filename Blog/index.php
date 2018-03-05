<?php
    require_once("database.php");
    require_once("models/articles.php");
    
    $link = db_connect();
    $sorting = sortingArticles();
    $articles = articles_all($link, $sorting);

    include("views/articles.php")
?>
