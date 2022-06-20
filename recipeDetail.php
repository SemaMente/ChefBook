<html>
<head>
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

        .service .button-addRecipe {
            background-color: red;
            color: white;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 13px 30px;
            border-radius: 30px;
            transition: .4s;
        }

        .service .button-addRecipe:hover {
            background-color: transparent;
            border: 2px solid red;
            cursor: pointer;
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

        th{
            border: 2px solid red;
            padding: 2px;
            text-align: center;
            background-color:#710000;
        }
        th:hover {background-color: red;} /*It changes color when hovering over it.*/
        tr:hover {background-color: rgb(97, 97, 97);} /*It changes color when hovering over it.*/

    </style>
</head>
<body>

<?php
session_start();
include 'classes/connect.php';
include 'classes/info.php';
include 'classes/create.php';

$info = new info();
$categories = $info->getCategories();

// is looking for is, it's checking whether the field or part of the array that gets passed through $_POST contains the submit field or submit name attribute.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//if not logged in it redirects to login
    if (empty($_SESSION['chefbook_userid'])) {
        echo "<h1 style='text-align: center; font-size: 4rem'>Please <a href='login.php'>Login</a> First!</h1>";

    } else {
        //We send the values from the post (from the user) to createcomment and it creates comments with insert into values
        $create = new create();
        $result = $create->createComment($_POST, $_SESSION['chefbook_userid']);
        if ($result)
            echo "<h4 style='text-align: center; font-size: 2rem'>Transaction successful!</h4>";
        else
            echo "<h4 style='text-align: center; font-size: 2rem'>Operation Failed!</h4>";
    }
}
//Added related recipes fetch part
$recipe_id = $_GET['recipe_id'];
$recipeInfo = $info->getRecipeDetail($recipe_id);
$categoryInfo = $info->getCategory($recipeInfo[0]['category_id']);
$comments = $info->getComments($recipe_id);
?>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <?php foreach ($categories as $key): ?>
        <a href="categoryDetail.php?category_id=<?= $key['id'] ?>"><?= $key['name'] ?></a>
    <?php endforeach; ?>

    <a href="index.php">Back to main page</a>
</div>


<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Categories</span>
</div>

<script>
    //navigationBar
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
<!-- Comment Part -->
<div class="service">
    <div class="title">
        <h5><?= $categoryInfo[0]['name']; ?> > <?= $recipeInfo[0]['name']; ?></h5>

        <div style="display: flex;align-items: center; justify-content: center;">
            <img style="width: 250px;" src="images/recipes/<?= $recipeInfo[0]['image'] ?>" alt="">
        </div>

        <h2 style="color: white; text-align: center; margin: 75px;"><?= $recipeInfo[0]['description']; ?></h2>

    </div>

    <div style="max-width: 1200px; margin: 0 auto; border: 1px solid white;" class="container">

        <h2 style="text-align: center; color: white;">Comments</h2>

        <!--if there is no comment -->
        <?php if ($comments == null): ?>
            <h4 style="color: green; text-align: center;">There are no comments!</h4>
        <?php else: ?>
            <table style="margin: 0 auto;font-size: 1.5rem; color: black;" border="2">
                <thead> <!--Create comment table-->
                <tr>
                    <th>Name Surname</th>
                    <th>Comment</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <?php foreach ($comments as $key): //we access comments columns(db) by using key ?>
                    <tr style="margin: 0 auto;font-size: 1.5rem; color: white;" border="2">
                        <td width="250"><?= $key['first_name'] . ' ' . $key['last_name']; ?></td>
                        <td width="750"><?= $key['comment']; ?></td>
                        <td width="250"><?= $key['created_at']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        <form style="margin-top: 50px;" action="" method="POST">
            <label style="color: white; font-size: 1.5rem; " for="">Add New Comment:</label><br>
            <textarea name="comment" style="font-size: 1rem; padding: 25px; width: 100%; margin-top: 20px; background-color:rgb(76, 76, 76)" id=""
                      cols="30"
                      rows="3"
                      ></textarea>
            <input type="hidden" value="<?= $recipe_id ?>" name="recipe_id">

            <button type="submit"
                    style="padding: 10px; color: red; font-size: 1.2rem; margin-top: 10px; width: 100%;">
                Add Comment!
            </button>
        </form>


    </div>


</div>

</div>
<section class="footer">
    <div class="credit">
        created by <span> ChefBook </span> | all rights reserved

    </div>
</section>
</body>
</html>


