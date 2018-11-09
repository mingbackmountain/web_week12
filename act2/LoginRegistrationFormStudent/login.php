<?php session_start();

//setting username and password

	ob_start();
	$username = array("admin","user","sale","ming");
	$password = array("123","456","789","000");

//adding your code here
    function checkLogin($user,$pass){
        global $username ,$password;
        for($i = 0; $i < count($username); $i++){
            if($user == $username[$i] && $pass == $password[$i]){
                return true;
            }
        }
        return false;
    }
?>

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
            //adding your code here
            if(isset($_POST["username"]) && isset($_POST["password"])){
                if(checkLogin($_POST["username"],$_POST["password"])){
                    $_SESSION["errormsg"] = "";
                    $_SESSION["log"] = true;
                    header("Location:welcome.php");
                }else{
                    $_SESSION["errormsg"] = "Wrong Username and Password";
                    echo"<p>Wrong Username and Password</p>
                         <p>please go back to reenter again</p>
                         <a href=\"index.php\">go back</a>";
                }
            }
        ?>
	</div>
    </body>
</html>
