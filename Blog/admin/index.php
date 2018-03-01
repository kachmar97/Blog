<?php
    require_once("../database.php");
    require_once("../models/articles.php");

    $link = db_connect();
    
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

    //Додавання
    if($action == "add"){
        if(isset($_POST['save'])){
            articles_new($link, $_POST['title'], date("d.m.y о H:i:s"), $_POST['content']);
            header("Location: index.php");
        }
        include("../views/article_admin.php");
    }
    //

    //Редагування
    else if($action == "edit"){
        if(!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];
        
        
        if($articles['title']!=$_POST['title']){
               if(!empty($_POST) && $id>0){
                    articles_edit($link, $id, $_POST['title'], date("d.m.y о H:i:s"), $_POST['content']);
                    header("Location: index.php");
                }else{
                    return false;
                } 
        }else{
            $article = articles_get($link, $id);
            include("../views/article_admin.php");
        }
    }
    //

    //Видалення
    else if($action == "delete"){
        $id = $_GET['id'];
        $article = articles_delete($link,$id);
        header("Location: index.php");
    }
    //

    else{
        $articles = articles_all($link);
    include("../views/articles_admin.php");    
    }
?>