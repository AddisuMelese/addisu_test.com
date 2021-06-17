<!DOCTYPE html>
<html>
<body>                
    <span class="form">
        <p><label><h3>First Name:</h3><input type= "text" name= "Fname" placeholder="Only string" ><span class="error"> * <?php echo "<br>" . $fnameR; ?></span></label></p>
        <br><p><label><h3>Midle Name:</h3><input type= "text" name= "Mname" placeholder="Only string"><span class="error"> * <?php echo "<br>" . $mnameR; ?></span></label></p>
        <br><p><label><h3>Last Name:</h3><input type= "text" name= "Lname" placeholder="Only string"><span class="error"> * <?php echo "<br>" . $lnameR; ?></span></label></p>
    </span>
    <span class="form">
    <p><label><h3>Age:</h3><input type= "text" name= "age" placeholder="Only Number"></label><span class="error"> * <?php echo "<br>" . $ageR; ?></span></p>
    <br><p><label><h3>Gender:<span class="error"> * <?php echo $genderR; ?></span></h3><input type= "radio" name= "sex" value="Male">Male
        <input type= "radio" name= "sex" value="Female">Female</label></p>
        <br><p><label><h3>Birth Date:</h3><input type= "date" name= "birthdate"><span class="error"> * <?php echo "<br>" . $birthR; ?></span></label></p>
    </span>
    <span class="form">
        <p><label><h3>E-mail Address:</h3><input type= "email" name= "email" placeholder="name@domain.com"> <span class="error"> * <?php echo "<br>" . $emailR; ?></span></label></p>
    <br><p><label><h3>Websit Address:</h3><input type= "url" name= "Web" placeholder="https://www.domainname.com"> <span class="error"> * <?php echo "<br>" . $webR; ?></span></label></p>
    <br><p><label><h3>Phone Number:</h3><input type= "tel" name= "phonenumber" placeholder= "0948773837" pattern="\d{10}"><span class="error"> * <?php echo "<br>" . $phonR; ?></span></label></p>
        </span><!--placeholder= "(094) 877-3837" pattern="\(\d{3}\) +\d{3}-\d{4}"-->
    <span class="form">
    <p><label><h3>Select Your Address:</h3></label>
        <select class="Kselect" name="Kbselect">
            <option name= "none" value= "None">None</option>
            <option name= "kebele_01" value= "Kebele 01">Kebele-01</option>
            <option name= "kebele_02" value= "Kebele 02">Kebele-02</option>
            <option name= "kebele_03" value= "Kebele 03">Kebele-03</option>
            <option name= "azmach" value= "Azmach-k">Azmach</option>
            <option name= "dimama" value= "Dimama-k">Dimama</option>
            <option name= "shinkuri" value= "Shinkuri-k">Shinkuri</option>
            <input type= 'text' name= 'otherkeb' placeholder='No found write here'>
            <span class="error"> * <?php echo "<br>" . $KselectR; ?></span>
        </select>                    
</body>
</html>