
<!DOCTYPE html>
<html>
    <head>
        <title>AK_form</title>
        <link rel="stylesheet" type="text/css" href="ak_error.css"><!--Call the css file-->
        <style>
            [class*="submit"]
            {
                color:blue;
                background-color:red;
                float:left;
            }
        
            *{box-sizing: border-box;}       
            .form
            {
                padding:5px;
                margin:0;
                color:blue; 
                float:left;
                width:25%;
            }
            .formall
            {
                margin: 150px 20px 0 60px;
                position:sticky;  
            }
        </style>
    </head>
    <body>
        <?php include "CAddis_Kidam_Main.php";?> 
        <section class="formall">
        <section>
            <p><a href="9ak_form&course.php"><strong>Back</strong></a></p>
        </section>
        <section>
            <?php include "Cak_form_error.php"; ?>
        </section>
        <section>
           <!--<details>
                <summary>Course Registration</summary>-->
                <p><h3 class="error">* Required &amp; non optional field</h3></p>
                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                    <?php include "Cak_form_supporter.php"; ?>
                    <br><div><label>Any Comment:<br><textarea name= "comment" cols="35" rows="2"> </textarea></label></div>
                   </span><br>
                   <br><input type="submit" name="Submitn9" value="Submit" class="submit">
                   <input type= "reset" name= "Reset" value= "Clear" class="submit">
                </form>
                 <!--</details>-->
        </section>
       <?php
           include "9ak_enter_studentform_database.php";
        ?>
    </body>
</html>                            
                        