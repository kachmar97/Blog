<?php

date_default_timezone_set('Europe/Kiev');

function articles_all($link, $sort='id DESC')
{
    $query = "SELECT * FROM articles ORDER BY $sort";
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $articles = array();
    
    for($i=0;$i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
        $articles[]=$row;
    }
    
    return $articles;
}

function articles_get($link, $id_article){
    $query = sprintf("SELECT * FROM articles WHERE id=%d",(int) $id_article);
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die (mysqli_error($link));
    
    $article = mysqli_fetch_assoc($result);
    
    return $article;
}

function articles_new($link, $title, $date, $content){
    $title = trim($title);
    $date = trim($date);
    $content = trim($content);
    
    $t="INSERT INTO articles (title, date, content) VALUES('%s','%s', '%s')";
    
    $query = sprintf($t, mysqli_real_escape_string($link, $title),
                        mysqli_real_escape_string($link, $date),
                        mysqli_real_escape_string($link, $content));
    
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    return true;
}

function articles_edit($link, $id, $title, $date, $content){
    $title = trim($title);
    $content = trim($content);
    $date = trim($date);
    $id = (int)$id;
    
    if($title == '')
        return false;
    
    $sql = "UPDATE articles SET title='%s', content='%s', date='%s' where id='%d'";
    
    $query = sprintf($sql, mysqli_real_escape_string($link, $title),
                            mysqli_real_escape_string($link, $content),
                            mysqli_real_escape_string($link, $date),
                            $id);
    
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
}

function articles_delete($link, $id){
    $id = (int)$id;
    
    if($id == 0)
        return false;
    
    $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
}

function articles_intro($text, $len=500){
    return mb_substr($text, 0, $len);
}

function views_update($link, $id){
    $query = "UPDATE articles SET views = views + 1 WHERE id = $id"; 
    $result = mysqli_query($link, $query);
    if(!$result)
        die(mysqli_error($link));
}

function generatePassword($length = 8){
    $chars = 'ABDEFGHKNQRSTYZ23456789';
    $numChars = strlen($chars);
    $string = '';
    for ($i = 0; $i < $length; $i++) {
      $string .= substr($chars, rand(1, $numChars) - 1, 1);
    }
    return $string;
}

function sortingArticles(){
    $sorting = $_GET['sort'];

    switch ($sorting){
        
        case 'views-desk':
            $sorting = 'views DESC';
            $sort_name = 'По даті';
            break;
        
        case 'date-desk':
            $sorting = 'date DESC';
            $sort_name = 'По даті';
            break;
        
        default:
            $sorting = 'id DESC';
            $sort_name = 'Немає сортування';
            break;
    }
    
return $sorting;
}

?>