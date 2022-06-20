<?php
include("classes/connect.php");
include("classes/signup.php");

$first_name = "";
$last_name = "";
$gender = "";
$username = "";
$email = "";
//post is getting information from the user
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $signup = new Signup();
    $result = $signup->evaluate($_POST);
    if ($result != "") {
        echo "<div style='text-align:center;font-size:13px;color:black;background-color:white; '>";
        echo "Errors :<br>  ";
        echo $result;
        echo "</div>";
    } else {
        //redirect user to the login page
        header("Location: login.php");
        die();
    }


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $email = $_POST['email'];
}


?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ChefBook | Sign Up </title>
</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: url('images/loginBackgroundImage.jpg') center center no-repeat fixed;
        background-size: cover;
        font-family: tahoma;
    }

    form {
        margin: auto;
        width: 300px;
        margin-top: 35px;
        background: rgba(0, 0, 0, 0.2);
        padding: 80px;
        border: 5px solid darkred;
        border-radius: 16px;
        text-align: center;
    }

    #text {
        border: 2px solid darkred;
        font-size: 15px;

    }

    #button {
        text-align: center;
        color: darkred;
        border: none;
        font-size: 15px;
        width: 90px;
        height: 40px;
        border-radius: 4px;
    }


</style>
<body style="font-family:tahoma;">
<div id="top_bar">
    <div style="font-size: 40px; height: 125px; color: darkred; background-color:lightblue;"><img
                src="images/ChefBookLogo.jpeg" style="width: 203px; float: left; margin-top: 0px; "> <br> <span
                style=" font-size: 40px; margin-left:400px;">Sign up to ChefBook </span></div>


</div>
<div id="bar2">
    <form method="post" action="">
        <input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First Name">
        <br><br>
        <input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last Name"> <br><br>
        <span style="font-weight: normal;"> Gender: </span> <br>
        <select name="gender" id="text">
            <option><?php echo $gender ?></option>
            <option> Female</option>
            <option> Male</option>
        </select>
        <br> <br>
        <input value="<?php echo $username ?>" name="username" type="text" id="text" placeholder="Username"> <br><br>
        <input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email"> <br><br>
        <input name="password" type="password" id="text" placeholder="Password"> <br><br>
        <input name="password2" type="password" id="text" placeholder="Retype Password"> <br><br>
        <input type="submit" id="button" value="Sign up"> <br><br>
        <br><br>
    </form>

</div>


</body>
</html>