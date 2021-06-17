<?php
    $server_name="localhost";
    $user_name="root";
    $password="";
    //_________________________________Connect db_____________________________________________________________________
    $db_connection= new mysqli($server_name, $user_name, $password);//connect the php with database
    if($db_connection->connect_error)//check the connection of db
    {
        die("Not connected Beceause " . connect_error );
    }
    echo "";
    //_________________________________Create db_____________________________________________________________________
    $creat_db="CREATE DATABASE addis_kidam_database";
    if($db_connection->query($creat_db) || $db_connection->error=="Can't create database 'addis_kidam_database'; database exists")//check the bd create
    {
        echo "";
    }
    else {echo "<br>DB not created due to " . $db_connection->error;}
?>
