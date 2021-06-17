<!DOCTYPE html>
<html> <!--The database for individual-->
    <head>
        <title>AK_form</title>
        <link rel="stylesheet" type="text/css" href="Cak_error.css"><!-- Call the css file-->
        <style>
            .idall
            {
                margin: 150px 20px 0 500px;
                position:sticky;
            }
        </style>
    </head>
    <body>
        <?php include "CAddis_Kidam_Main.php"; 
        include "9ak_studentlist_table_database.php";?>
        <section class="idall">
        <p><a href="9ak_form&course.php"><strong>Back</strong></a></p>
        <?php
            $tablecreating_id=$tablecreating_idR=$string="";
            if(empty($_POST["id_number"]))
                {
                    $tablecreating_idR="";
                }
                else
                {
                    $tablecreating_id= $_POST["id_number"];
                            //check age validation
                    if(!preg_match("/^[0-9]*$/", $tablecreating_id ))//Take care there is space
                    {
                        $tablecreating_idR= " '$tablecreating_id' is not posetive integer number" ;
                        $tablecreating_id="";
                        $string="string";
                    }
                } 
            //_________________________________check presence of id to their own creat table__________________________________________________
            echo '<form method="post">';
            echo "<h2 style='color: blue;'> Your Registered Id number:</h2><br><input type='text' name='id_number' placeholder='Enter registration Id'>";
            echo '<input type="submit" value="Display" name="display9">';
            echo "<span class='error'> * <br>" . $tablecreating_idR . "</span>";
            echo "</form>";

            if(isset($_POST['display9']))
            {
                if(empty($_POST['id_number']))
                {   $tablecreating_idR="";
                    echo "<span class='error'>Please insert Id correctlly</span>";
                }
                else
                {   $tablecreating_id=$_POST['id_number'];
                    $select_id="SELECT id FROM ak_studentlist_grade9";//ak_studentlist_grade9 is already created then check the id from
                    $select_id_result=$db_connection->query($select_id);

                    if($select_id_result->num_rows>0)
                    {  $check="ok";
                        while($row=$select_id_result->fetch_assoc()) 
                        { 
                            if($row['id']==$tablecreating_id)
                            {   $check="";
                                echo '<a href="9ak_course.php">Courses</a>';
                                //_________________________________create table_____________________________________________________________________
                                include "Cak_create_database.php";//connect and creat database
                                $db_name="addis_kidam_database";//to creat the table from the database
                                $db_connection= new mysqli($server_name, $user_name, $password, $db_name);//connect the php with database
                                $table_craet="CREATE TABLE akform_table_course_$tablecreating_id(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                                    dbsubject VARCHAR(30)  NOT NULL,
                                                    dbquiz INT(10) UNSIGNED  NOT NULL,
                                                    dbassignment INT(10) UNSIGNED  NOT NULL,
                                                    dbmid INT(10) UNSIGNED  NOT NULL,
                                                    dbfinal INT(10) UNSIGNED  NOT NULL,
                                                    dbtotal INT(10) UNSIGNED  NOT NULL
                                                    )";
                                if($db_connection->query($table_craet))
                                {
                                    echo "<span class='success'><br>created</span>";
                                    echo "<br>Your Id: $tablecreating_id save it for next it required";
                                } 
                                else 
                                { 
                                    echo "<span class='error'><br>" . $db_connection->error . "</span>";
                                }
                                echo "<br>Your Id: $tablecreating_id save it for next it required";
                                
                                break;
                            }
                            else{}//the case  replced by $check
                        }
                        if($check==="ok" && $string!=="string")
                        {
                            echo "<span class='error'>'$tablecreating_id' is not registered id</span>";
                        }
                    }            
                }
            }           
        ?>
        </section>
    </body>
</html>