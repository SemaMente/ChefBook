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

        .title h4 {
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

        h4 a {
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
            color: white;
        }
    </style>
</head>

<body>

    <?php
    include 'classes/connect.php';//connect db class
    include 'classes/info.php'; //data extraction class

    $info = new info(); //We create an object from the info class
    $categories = $info->getCategories(); //take categories

    $category_id = $_GET['category_id']; //Using the get parameter, we open the category pages with the category id information (it also appears in our url, as in recipe.php)
    $categoryInfo = $info->getCategory($category_id);//categoryid is sending, we get the same id from the info section with the id sent.
    $recipes = $info->getCategoryRecipes($category_id);//It brings recipes that belong to the category the user wants.
    ?>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <?php foreach ($categories as $key) : ?>
            <a href="categoryDetail.php?category_id=<?= $key['id'] ?>"><?= $key['name'] ?></a>
        <?php endforeach; ?>

        <a href="index.php">Back to main page</a>
    </div>


    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Categories</span>
    </div>

    <script>
        //navigation bar
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
            <h4><?= $categoryInfo[0]['name']; ?></h4>

            <h3 style="color: white; text-align: center; margin: 75px;"><?= $categoryInfo[0]['description']; ?></h3>

        </div>


        <?php if ($recipes == null) : ?>  <!--If the recipe is null, a button will appear and you add a recipe. -->
            <p style="text-align:center;">
                <a class="button-addRecipe" href="addNewReciep.php">Add Recipe</a>
            </p>
       <?php else : ?> <!--If the recipe is not empty, we return the recipes using the recipes key with the foreach loop, together with their pictures.-->

            <?php
            $i = 0;
            echo '<div class="box">';
            ?>

            <?php foreach ($recipes as $key) : ?>
                <?php $i++; ?>

                <div class="card">
                    <div class="image"><img src="images/recipes/<?= $key['image'] ?>"></div>
                    <h4><a href="recipeDetail.php?recipe_id=<?= $key['id'] ?>"><?= $key['name'] ?></a></h4>
                    <div class="pra">
                        <p><?= $key['description'] ?></p>
                    </div>
                </div>

                <?php if ($i % 3 == 0) : ?>
                    <?= "</div>" ?>
                <?php endif; ?>

                <?php if ($i % 3 == 0) : ?>
                    <?= '<div class="box">' ?>
                <?php endif; ?>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <section class="footer">
        <div class="credit">
            created by <span> ChefBook </span> | all rights reserved
        </div>
    </section>
</body>

</html>