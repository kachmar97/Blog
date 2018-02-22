<?php
define ('MYSQL_SERVER','mysql.hostinger.com.ua');
define ('MYSQL_USER','u207679091_root');
define ('MYSQL_PASSWORD', '1234554321');
define ('MYSQL_DB', 'u207679091_db');

function db_connect(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        print("Error: ".mysqli_error($link));
    }
    
    return $link;
}
?>