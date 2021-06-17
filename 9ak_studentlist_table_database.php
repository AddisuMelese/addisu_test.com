<?php
    include "Cak_create_database.php";
    $db_name="addis_kidam_database";//to creat the table from the database
    //_________________________________Connect db_____________________________________________________________________
    $db_connection= new mysqli($server_name, $user_name, $password, $db_name);//connect the php with database
    //_________________________________Create table_____________________________________________________________________
    $table_craet="CREATE TABLE ak_studentlist_grade9(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    dbfname VARCHAR(30) NOT NULL,
                                    dbmname VARCHAR(30) NOT NULL,
                                    dblname VARCHAR(30) NOT NULL,
                                    dbage   INT(10) UNSIGNED NOT NULL,
                                    dbgender VARCHAR(7) NOT NULL,
                                    dbBdate  VARCHAR(30) NOT NULL,
                                    dbemail  VARCHAR(30) NOT NULL,
                                    dbwebsit VARCHAR(100),
                                    dbphone  INT(13) UNSIGNED NOT NULL,
                                    dbkebele VARCHAR(30) NOT NULL)";
    if($db_connection->query($table_craet)|| $db_connection->error=="Table 'ak_studentlist_grade9' already exists")
    {
        echo "";
    }  
    else 
    { 
        echo "<span class='error'><br>Table not Created due to " . $db_connection->error . "</span>";
    } 
?>
