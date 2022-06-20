<html>
    <head>
        <style>
            #bar2{
                /* background: url(semaa.jpg); not working*/
                background-color: #E88282;
                opacity: 0.9;
            }
            #bar2 .wew{
                text-align: center;
                border: 3px solid red;
                border-radius: 15px;
                border-collapse: collapse;
            }
            #menu{
                background-image: url("semaa.png");
            }
        </style>
    </head>
    <body>
        <?php
include 'header.php';
include 'classes/info.php';
include 'classes/update.php';
include 'classes/create.php';
@$user_id = $_SESSION['chefbook_userid'];
?>


<?php if (@$_SESSION['chefbook_userid'] == null): ?>
    <h4 style="font-size: 9rem; margin: 150px; color: #fff; text-align: center;">Please Login First!</h4>
    <a href="login.php"
       style="font-size: 5rem; margin: 250px; text-decoration: underline; color: #fff; text-align: center; display: block">Click
        here for login.</a>
<?php else: ?>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $update = new create(); 
        $result = $update->createRecipe($_POST, $_FILES, $user_id); //throws the data from the post to the update object the file from the file
        if ($result) {
            $sonuc = move_uploaded_file($_FILES["image"]["tmp_name"], "images/recipes/" . $_FILES["image"]["name"]);//We import the image uploaded with the move upload file function into the image recipes file.
            echo "<h1 style='text-align: center; font-size: 2rem color: green'>Transaction successful!</h1>";
        } else {
            echo "<h1 style='text-align: center; font-size: 2rem; color: red'>Operation Failed!</h1>";
        }
    }


    $info = new info();
    $categories = $info->getCategories();
    ?>

    <!-- start menu section-->
    <section class="menu" id="menu">
        <h1 class="heading"> Create New Recipe </h1>

        <div style="display: flex; align-items: center; justify-content: center;" id="bar2">
            <form method="post" action="" enctype="multipart/form-data">  <!-- enctype is used because we have file attachment function-->
<br><br><br>
<div class="wew">
                <label style=" margin-left:15px; font-weight: normal; font-size: 2rem;" for="">Recipe Category:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select style="text-align:center; margin-top:15px; margin-bottom:15px; margin-right:15px; font-weight: normal; width: 255px; font-size: 2rem;" required name="category" id="">
                    <option value="">Select Category</option>
                    <?php foreach ($categories as $key): ?>
                        <option value="<?= $key['id'] ?>"><?= $key['name'] ?></option>
                    <?php endforeach; ?>
                </select></div>
                <br><br><br><br>

                <div class="wew">
                <label style="font-weight: normal; font-size: 2rem;" for="">Recipe Name:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input style="margin-left:10px; margin-bottom:10px; margin-top:10px; font-weight: normal; font-size: 1.5rem; padding: 8px 12px;" type="text" required placeholder="recipe name"
                       name="name"> </div>
                <br><br><br><br>
                <div class="wew">
                <label style="margin-left:15px; font-weight: normal; font-size: 2rem;" for="">Recipe Description:</label> <br> <br> &nbsp;&nbsp;&nbsp;
                <textarea style="margin-bottom:25px; " name="description" required placeholder="                      enter your amazing recipe description" id=""
                          cols="60"
                          rows="10"></textarea> </div>
                <br><br><br><br>

                <div class="wew">
                <label style="margin-left:15px; margin-bottom:15px; font-weight: normal; font-size: 2rem;" for="">Recipe image:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="file" name="image" required accept=".jpeg, .jpg, .png">
                <br><br></div>
                <br><br><br><br><br>


                <button type="submit" style="width: 600px;cursor:pointer; font-size: 2rem; height: 50px;">
                    Save Your Recipe
                </button>
<br><br><br><br><br>
            </form>
        </div>

    </section>


<?php endif; ?>


<?php include 'footer.php'; ?>
    </body>
</html>
