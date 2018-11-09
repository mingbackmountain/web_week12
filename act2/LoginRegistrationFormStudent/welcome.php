<?php session_start();?>
<!DOCTYPE html>
 <html>
    <head>
        <title>Login and Registration Form</title>

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
        
        <?php
            if(isset($_SESSION["log"])){
                echo "<h1 style=\"font-weight: bold; font-size: 60px\">WELCOME TO OUR SYSTEM</h1>";
            }else{
                echo"
                    <h1>Please login first</h1>
                    <a href=\"index.php\">go back</a>;
                ";
            }
            session_destroy();
        ?>
            
	</div>
    </body>
</html>
