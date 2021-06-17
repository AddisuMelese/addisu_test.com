<?php
    include "9ak_studentlist_table_database.php";
    //_________________________________Insert data to table_____________________________________________________________________
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {   if(isset($_POST['Submitn9']))
        {
            if(empty($fname) || empty($mname) || empty($lname)|| empty($age)|| empty($gender) || empty($email)|| empty($web)|| 
            empty($phon)|| empty($birth)|| ($_POST["Kbselect"]=="None" && empty($_POST['otherkeb'])))
            {
                echo "<span class='error'>All Information is Required to submit Fill Carefully</span>";
            }
            else   
            {
                $enter_data=$db_connection->prepare("INSERT INTO ak_studentlist_grade9(dbfname, dbmname, dblname, dbage, dbgender, 
                                                    dbBdate, dbemail, dbwebsit, dbphone, dbkebele) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");                                                 
                $enter_data->bind_param("ssssssssss", $fname, $mname, $lname, $age, $gender, $birth, $email, $web, $phon, $Kselect); 
                $enter_data->execute();
                echo "<span class='error'>Submitted Successfully</span>"; 
            }
        }
    } 
?>