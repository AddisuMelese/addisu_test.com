 <!DOCTYPE html>
 
 <html>
 <head>
     <style>
 footer{
    /*background-image:url("Footer.GIF");
    background-size: 20% 10%;
    background-attachment: fixed;
    opacity: 1;for browser only
    filter: alpha(opacity=100);For internet explorer 
    text-align:top;
    bottom: 0;
    left: 0;
    right: 0;
    padding:0px;
    */
    background-color:blue;
    position: fixed;
    height: 50px;
    width: 100%;
    bottom: 0;
    color:white;
    }
    @keyframes blink {
    0%{opacity: 0}
    50%{opacity: 0.5}
    100%{opacity: 1}}
    a.Copy{ color:red;
    animation:blink 1s linear infinite;
     }
</style>
</head>
<body>
<footer>
    <strong>&phone; Developed by Addisu Melese Hailu </strong>
    <strong>&phone; Contact us by: <a href="mailto:addis1melese@gmail.com" class= "Copy" target="_blank"> addis1melese@gmail.com</a> &amp;<a href="https://www.facebook.com/melkadis.melese/" target="_blank"> Facebook Account</a>  </strong> 
    <strong>&copy; Copy right from 2000-<?php echo date("Y");?> </strong>
    
    <br><strong>&phone; The date <?php date_default_timezone_set("Africa/Addis_Ababa");
	                            echo "Today is__" . date("l__") . date("h:i:sa") . "__" . date("y-m-d");?>   
                                </strong>
</footer>
</body>
</html>