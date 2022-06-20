<html>
<head>
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-image: url("semaa.png");
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

    </style>
</head>
<body>

<?php
include 'classes/connect.php';
include 'classes/info.php';

$info = new info(); //We create object from info class
$categories = $info->getCategories(); //I also create an object called categories and use the getcategories function in the info class.
?>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- the area where we list the categories
We navigate between the columns by saying as key-->
    <?php foreach ($categories as $key): ?>
        <a href="categoryDetail.php?category_id=<?= $key['id'] ?>"><?= $key['name'] ?></a>
    <?php endforeach;  ?>

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

<div class="service">
    <div class="title">
        <h5>Recipes</h5>
    </div>

<!--access to categories -->
    <?php
    $i = 0;
    echo '<div class="box">';
    ?>

    <?php foreach ($categories as $key): ?>
        <?php $i++; ?>

        <!-- Taking the picture of the selected category from the database -->
        <div class="card">
            <div class="image"><img src="images/categories/<?= $key['image'] ?>"></div>
            <h5><a href="categoryDetail.php?category_id=<?= $key['id'] ?>"><?= $key['name'] ?></a></h5>
           
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
</div>

</div>
<section class="footer">
    <div class="credit">
        created by <span> ChefBook </span> | all rights reserved
    </div>
</section>
</body>
</html>


