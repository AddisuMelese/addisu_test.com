<!DOCTYPE html>
<html>
    <head>
        <title>AK_registration</title>
        <style>
           .registeration
              {
               margin: 150px 20px 0 60px;
               position:relative;
               left: 500px;  
               }
           *{
               box-sizing: border-box;
            }
           .form{
               width: 30%;
           }
           .batch{
            width: 30%;
           }
        </style>
    </head>
    <body>
    <?php include "CAddis_Kidam_Main.php"; ?>
      <section class="registeration">
      <section class= "form">
            <h2 style="color:blue;">First of all fill the format</h2>
            <p><a href="9ak_form.php"><h3>Form</h3></a></p>
        </section>
        <section class= "batch">
        <h2 style="color:blue;">Select Course</h2>
            <p><a href="9ak_course_registration_database.php"><h3 >Course Registration</h3></a></P>
            <p style="color:red;"><h2 style="color:blue;">Editting already registered data</h2></p>
            <p><a href="9ak_form_updating_database.php"><h3>Update Form</h3></a></P>
        </section>
        </section>
    </body>
</html>