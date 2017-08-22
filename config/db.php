<?php

//Initial Variables
$db_host = 'localhost';
$db_username = 'bato';
$db_pass = '123456';
$db_name = 'dragondb';

//DB connection
$link = mysqli_connect($db_host, $db_username, $db_pass);

if($link)
{
    $db_create = 'CREATE DATABASE IF NOT EXISTS dragondb'; 

    if(mysqli_query($link, $db_create))
    {
        echo "<br>Database Created";

        $db_table = 'CREATE TABLE IF NOT EXISTS dragondb.dragon (
            id INT NOT NULL AUTO_INCREMENT,
            title VARCHAR(255) NOT NULL,
            year VARCHAR(255) NOT NULL,
            description TEXT,
            PRIMARY KEY (id)
            )';

        if(mysqli_query($link, $db_table))
        {
            echo "<br>Table Created";
        }
        else
        {
            echo"<br>".mysqli_connect_error();
        }
    }
    
}
