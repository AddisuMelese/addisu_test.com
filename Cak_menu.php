<!DOCTYPE html>
<html>
    <head>
       <style>
           body
           {
                background-image:url("back.jpg");
                background-size:100%;
                background-attachment: fixed;
                opacity: 1;/*for browser only*/
                filter: alpha(opacity=100);/*For internet explorer*/
                font-family: sans-serif;
            }
           *{
               margin: 0;
               box-sizing: border-box;
            }
            
           header{
               color: white;
               background-color: blue;
               height: 30px;
               width: 100%;
               position: fixed;
               text-align: center;
               padding-top: 1px;
               top: 0;
           }
           .promotion{
                color: blue;
                background-color: yellow;
                position: fixed;
                height: 50px;
                width: 100%;
                top: 30px;
                text-align: center;
                padding-top: 10px;
           }
           .container
           {
                background-color: blue;
                height: 10px;
                width: 100%;
                position: fixed;
                top:80px;
           }
           .menu
           {
                background-color: rgb(0, 100,0);
                height: 36px;
                width: 99%;
                position: fixed;
                top:90px;
                margin: 0 1%;
                font-family: sans-serif;    
           }
           a{color:magenta;
            text-decoration: none;
             }
           .left
           {
                background-color: blue;
                height: 700px;
                width: 1%;
                position: fixed;
                top:90px;
                left: 0;
           }
           .right
           {
                background-color: blue;
                height: 700px;
                width: 1%;
                position: fixed;
                top:90px;
                right: 0;
           }
           ul.Midle li{float: left;}
           ul.Midle
           {
              list-style-type: none;
            }
            ul.Midle li a
            {
                display: inline-block;
                background-color:rgb(0, 100,0);
                text-decoration: none;
                padding: 3px 16px; 
                position: relative;
                color: white;   
            }
            ul.Midle li a:link{background-color:rgb(0, 100,0);}
            ul.Midle li a:visited{background-color:rgb(0, 100,0);}
            ul.Midle li a:hover{background-color:#2bab0d;}
            ul.Midle li a:active{background-color:blue;}

            ul.Midle li p.Aboutus_List, p.Acadamic_List, p.Service, p.Contact
            {
                display: none; 
                background-color:rgb(0, 100,0);
                color:white; 
                position: relative;
                border-radius: 3px;  
            }
            ul.Midle li.About_us:hover p.Aboutus_List { display: block;}
            ul.Midle li.Acadamic:hover p.Acadamic_List { display: block;}
            ul.Midle li.servic_us:hover p.Service { display: block;}
            ul.Midle li.contact_us:hover p.Contact { display: block;}
            [class="error"]{ color:red;}

            input, select, textarea, table
            {border: 2px solid red;
            border-radius:10%;/*circulness largest edge*/
            border-radius:88px;/*corner smallest edge */
            box-sizing:border-box;
            height: 30px;
            }
            input[type=text]:visited{border: 2px solid red;}
            input[type=text]:hover{border: 2px solid green;}
            input[type=text]:focus{border: 2px solid white;background-color:yellow;}
       </style> 
    </head>
    <body class="body">
        <header><div><h1>Addis Kidam High School Website</h1></div></header>
        <section class="promotion"><div><h1>Promotion</h1></div></section>
        <section class="container"></section>
        <section class="menu">
            <ul class="Midle">
                <li><a href="CAddis_Kidam_Main.php"><i class="fa fa-home"> </i>Home</a></li>
                <li class="Acadamic"><a href="CAddis_Kidam_Main.php">Acadamic</a>
                    <p class="Acadamic_List">
                        <a href="Cak_registration.php" target="_self">Registration</a><br>
                        <a href="Cak_Enter_Result_gradechoose.php" target="_self">Result Enter</a><br>
                        <a href="Cak_display_Result_gradechoose.php" target="_self">Grade &amp; Result</a><br>
                        <a href="Cak_studentlist_gradechoose.php" target="_self">Students_List</a><br>
                    </p>
                </li>
                <li class="servic_us"><a href="CAddis_Kidam_Main.php">Service</a>
                <p class="Service">
                        <a href="Cak_registration.php" target="_self">Education</a><br>
                        <a href="Cak_Enter_Result_gradechoose.php" target="_self">Adiminstration</a><br>
                    </p>
                    </li>
                <li class="contact_us"><a href="CAddis_Kidam_Main.php">&phone;Contact Us</a>
                <p class="Contact">
                        <a href="Cak_registration.php" target="_self">E-mail</a><br>
                        <a href="Cak_Enter_Result_gradechoose.php" target="_self">Facebook</a><br>
                        <a href="Cak_display_Result_gradechoose.php" target="_self">Linked</a><br>
                        <a href="ak_update_form_database.php" target="_self">Phone Number</a><br>
                    </p>
                    </li>
                <li class="About_us"><a href="CAddis_Kidam_Main.php">About Us</a>
                    <p class="Aboutus_List" >
                        <a href="Location.html" target="_self">Location</a><br>
                        <a href="https://elevationmap.net/addis-kidam-town-fagta-lakoma-awi-agew-et-1011134221" target="_blank">Google map</a><br>
                        <a href="ak_history.php" target="_self">History</a><br>
                        <a href="Teachers_List.html" target="_self">Mission</a><br><!--Database-->
                        <a href="Students_List.html" target="_self">Vission</a><br><!--Database-->
                    </p>
                </li>
                <li><a><input type= "search" name="Search" placeholder="search "></a></li>
            </ul>
        </section>
        <section class="left"></section>
        <section class="right"></section>
        <footer class="footer"></footer>       
    </body>
</html>