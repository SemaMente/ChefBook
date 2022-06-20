<?php
include 'header.php';
include 'classes/info.php';
include 'classes/update.php';

@$user_id = $_SESSION['chefbook_userid'];
?>


<?php if (@$_SESSION['chefbook_userid'] == null): ?>
    <h1 style="font-size: 9rem; margin: 150px; color: #fff; text-align: center;">Please Login First!</h1>
    <a href="login.php"
       style="font-size: 5rem; margin: 250px; text-decoration: underline; color: #fff; text-align: center; display: block">Click
        here for login.</a>
<?php else: ?>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { //We update the information using our update class with the post method below
        $update = new update();
        $result = $update->updateProfileInfo($_POST, $user_id);
        if ($result) {
            echo "<h1 style='text-align: center; font-size: 4rem'>Transaction successful!</h1>";
        } else {
            echo "<h1 style='text-align: center; font-size: 4rem'>Operation Failed!</h1>";
        }
    }

//Using the info class, we map the userid of the logged in user and collect it in the userinfo
    $info = new info(); 
    $userInfo = $info->getUserInfo($user_id);
    $userRecipes = $info->getUserRecipes($user_id);//showing the recipes of the logged in user, we create an object named userRecipes
    //we run the getuser recipes function using the info class and giving it a user id.
    ?>

    <!-- start menu section-->
    <section class="menu" id="menu">
        <style>
            body{
                background-image: url("semaa.png");
            }
            #bar2{
                background: url(" images/semaa.jpg" ); 
                /* background-color: #E88282; */
                opacity: 0.9;
                
             
            }
            #bar2 input{
                display:flexbox;
                padding: auto;
            }
            #bar2 label{
                display: contents;
            }
            #bar2 .wew{
                background-image: url("semaa.png");
                text-align: center;
                border: 3px solid red;
                border-radius: 15px;
                border-collapse: collapse;
            }
            #mmm{
              margin-left: 33px;

            }
            #mmm1{
              margin-right: 20px;

            }
            #mmm2{
                margin-left: 6px;
            }
            #mmm3{
                margin-left: 7px;
            }

        </style>
        <h1 class="heading"> Account Settings </h1>

        <div style="display: flex; align-items: center; justify-content: center; " id="bar2">
            <form id="form1" method="post" action="">
<br><br><br>
            <div class="wew">
                <label id="nnn" style="font-weight: normal; font-size: 2rem; color:aqua" for=""> First Name:</label> &nbsp;&nbsp;&nbsp;
                <input id="mmm1" style="text-align:center; margin-top:20px; font-weight: normal; font-size: 2rem; " type="text" required placeholder="first name"
                      name="first_name" value="<?= $userInfo[0]['first_name'] //userinfodaki bilgileri kutucuklara yerleştiriyoruz?>">
                <br><br>
</div>
<br>
<div class="wew">
                <label style="font-weight: normal; font-size: 2rem; color:aqua" for="">Last Name:</label> &nbsp;&nbsp;&nbsp;
                <input id="mmm1" style="text-align:center; margin-top:20px; font-weight: normal; font-size: 2rem;" type="text" required placeholder="Last name"
                       name="last_name" value="<?= $userInfo[0]['last_name'] ?>">
                <br><br>
</div>
<br>
<div class="wew">
                <label style="font-weight: normal; font-size: 2rem; color:aqua" for="">Gender:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select id="mmm2" style="text-align:center; margin-top:20px; font-weight: normal; width: 215px; font-size: 2rem;" required name="gender" id="">
                    <option <?= $userInfo[0]['gender'] == 'Female' ? 'selected' : '' ?> value="Female">Female</option>
                    <option <?= $userInfo[0]['gender'] == 'Male' ? 'selected' : '' ?> value="Male">Male</option>
                </select>
                <br><br>
</div>
<br>
<div class="wew">
                <label style="font-weight: normal; font-size: 2rem; color:aqua" for="">Email:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="mmm" style="text-align:center; margin-top:20px; font-weight: normal; font-size: 2rem;" type="text" required placeholder="Email"
                       name="email"
                       value="<?= $userInfo[0]['email'] ?>">
                <br><br>
</div>
<br>
<div class="wew">
                <label style="font-weight: normal; font-size: 2rem; color:aqua" for="">Password:</label> &nbsp;&nbsp;&nbsp;
                <input id="mmm3" style="text-align:center; margin-top:20px; font-weight: normal; font-size: 2rem;" type="text" required placeholder="Password"
                       name="password"
                       value="<?= $userInfo[0]['password'] ?>">
                <br><br>
</div>
                <br><br>

                <button type="submit" style="text-align:center; margin-top:20px; width: 350px;cursor:pointer; font-size: 2rem; height: 50px;">Save Your
                    Profile
                </button>
                <br><br><br><br><br><br>
            </form>
        </div>

    </section>

    <section class="menu" id="menu">
        <h1 class="heading"> My Recipes </h1>

        <style>
            body {
                font-family: "Lato", sans-serif;
            }

            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            #main {
                transition: margin-left .5s;
                padding: 16px;
                background-color: red;
            }

            @media screen and (max-height: 450px) {
                .sidenav {
                    padding-top: 15px;
                }

                .sidenav a {
                    font-size: 18px;
                }
            }

            .service {
                background: #101010;
                width: 100%;
                padding: 100px 0px;
                transition: margin-left .5s;

            }

            .title h5 {
                color: white;
                font-size: 50px;
                width: 1130px;
                margin: 30px auto;
                text-align: center;
            }

            .box {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 400px;
            }

            .card {
                height: 365px;
                width: 335px;
                padding: 20px 35px;
                background: #191919;
                border-radius: 20px;
                margin: 15px;
                position: relative;
                overflow: hidden;
                text-align: center;
                border-radius: 3rem;
            }

            h5 a {
                color: white;
                font-size: 23px;
                margin-bottom: 15px;
            }

            .pra p {
                color: #bbd3ed;
                font-size: 16px;
                line-height: 27px;
                margin-bottom: 25px;
            }

            .card .button {
                background-color: #f9004d;
                color: white;
                text-decoration: none;
                border: 2px solid transparent;
                font-weight: bold;
                padding: 9px 22px;
                border-radius: 30px;
                transition: .4s;
            }

            .card img {
                width: 250px;
                border-radius: 2rem;
                height: 230px;
                object-fit: cover;
            }

            .card:hover img {
                transform: scale(1.1);
            }

            /* .card .button:hover{
                background-color: transparent;
                border: 2px solid #f9004d;
                cursor: pointer;
            } */

            .footer .credit {
                font-size: 2rem;
                color: red;
                font-weight: 300;
                padding-top: 1.5rem;
                text-align: center;
                font-size: 15px;
            }

            .footer .credit span {
                color: black;
            }
            .button-addRecipe:hover {
                background-color: transparent;
                border: 2px solid black;
                cursor: pointer;
            }

            .button-addRecipe {
                background-color:#191919;
                color: white;
                width: 250px;
                height: 60px;
                text-decoration: none;
                border: 2px solid transparent;
                font-weight: bold;
                padding: 13px 30px;
                border-radius: 30px;
                transition: .4s;
                font-size:medium;
                text-align: center;
            }
        </style>
        <div>
        <a style="float: right;" class="button-addRecipe" href="addNewReciep.php">Add New Recipe</a>
        </div>
        <br><br><br>
<br><br><br><br>
        <?php
        $i = 0;
        echo '<div class="box">';
        ?>
<!-- The part that brings the user recipes -->
        <?php foreach ($userRecipes as $key): //?>
            <?php $i++; ?>

            <div class="card">
                <div class="image"><img src="images/recipes/<?= $key['image'] ?>"></div>
                <h5><a href="recipeDetail.php?recipe_id=<?= $key['id'] ?>"><?= $key['name'] ?></a></h5>
                <div class="pra">
                    <p><?= $key['description'] ?></p>
                </div>
            </div>

            <?php if ($i % 3 == 0): ?>
                <?= "</div>" ?>
            <?php endif; ?>

            <?php if ($i % 3 == 0): ?>
                <?= '<div class="box">' ?>
            <?php endif; ?>

        <?php endforeach; ?>
    </section>

<?php endif; ?>


<?php include 'footer.php'; ?>