<?php
session_start();
include("classes/connect.php");
include("classes/login.php");

$username = "";
$password = "";

//post is getting information from the user
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = new Login();
    $result = $login->evaluate($_POST);
    if ($result != "") {
        echo "<div style='text-align:center;font-size:13px;color:black;background-color:white; '>";
        echo "Errors :<br>  ";
        echo $result;
        echo "</div>";
    } else {
        //after successfully login redirect user to the index page
        header("Location: index.php");
        die();
    }


    $username = $_POST['username'];
    $password = $_POST['password'];


}


?>
<html>
<head>

    <title> ChefBook | Login </title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {


            background: url('images/loginBackgroundImage.jpg') center center no-repeat fixed;
            background-size: cover;
            font-family: tahoma;
        }

        #bar {

            height: 120px;
            background-color: #b7daed;
            padding: 5px;

        }

        #signup_button {
            float: right;


        }

        #signUp {
            color: darkred;
            font-size: 18px;
        }


        div.loginBar {

            text-align: center;
        }


        div.loginPage p {

            color: black;
            font-size: 50px;
            border-bottom: 10px solid orangered;
            margin: 5px;

        }

        div.loginPage p:after {
            display: block;
            background: darkred;
            height: 20px;
            margin: 0 auto;

        }

        div.loginForm form {
            margin: auto;
            width: 300px;
            margin-top: 25px;
            background: rgba(0, 0, 0, 0.2);
            padding: 80px;
            border: 5px solid darkred;
            border-radius: 16px;
        }

        div.loginInputs {
            margin-top: 10px;
        }

        div.loginInputs label {
            display: block;
            text-transform: uppercase;
            padding: 5px;
            font-weight: bold;
            font-size: 15px;
        }

        div.loginInputs input {
            height: 15px;
            border: 3px solid darkred;
            font-size: 15px;
            text-align: left;
            padding: 8px;
        }

        div.loginButton button {
            text-align: center;
            margin-top: 38px;
            margin-left: 53px;
            color: darkred;
            border: none;
            font-size: 15px;
            padding: 12px 25px;
        }


    </style>

</head>
<body style="font-family: tahoma;">


<div id="bar">

    <div style="font-size: 40px; color: darkred;"><img src="images/ChefBookLogo.jpeg"
                                                       style="width: 204px; height: 125px; float: left; margin-top: 0px; ">
    </div>


    <div id="signup_button">
        <button>
            <a href="signup.php" id="signUp">Click to Sign Up</a>
        </button>
    </div>
</div>
<div class="loginForm">
    <form method="post" action="">
        <div class="loginInputs">
            <label for=""> Username </label>
            <input value="<?php echo $username ?>" placeholder="Username" type="text" name="username"/>
        </div>
        <div class="loginInputs">
            <label for=""> Password </label>
            <input value="<?php echo $password ?>" placeholder="Password" type="password" name="password"/>
        </div>
        <div class="loginButton">
            <button> Login</button>
        </div>

    </form>
</div>
</div>

</body>
</html>