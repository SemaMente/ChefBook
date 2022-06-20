<?php
?>
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
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.service{
	background: #101010;
	width: 100%;
	padding: 100px 0px;
    transition: margin-left .5s;
  
}
.title h5{
	color: white;
	font-size: 50px;
	width: 1130px;
	margin: 30px auto;
	text-align: center;
}
.box{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 400px;
}

.card{
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

h5 a{
	color: white;
	font-size: 23px;
	margin-bottom: 15px;
}
.pra p{
	color: #bbd3ed;
	font-size: 16px;
	line-height: 27px;
	margin-bottom: 25px;
}
.service .button-addRecipe{
	background-color:red;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 30px;
	transition: .4s; 
}
.service .button-addRecipe:hover{
	background-color: transparent;
	border: 2px solid red;
	cursor: pointer;
}

.card img{
    width: 250px;
    border-radius: 2rem;
    height: 230px;
    object-fit: cover;
}
.card:hover img {
    transform: scale(1.1);
}


.footer .credit{
  font-size: 2rem;
  color: red;
  font-weight: 300;
  padding-top: 1.5rem;
  text-align:center;
  font-size:15px;
}

.footer .credit span{
 color: black;
}


        </style>
    </head>
    <body>

    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="meatDishes.php">Meat Dishes</a>
  <a href="chickenDishes.php">Chicken Dishes</a>
  <a href="fishDishes.php">Fish Dishes</a>
  <a href="categoryDetail.php">Vegetable Dishes</a>
  <a href="dietDishes.php">Diet Dishes</a>
  <a href="vegetarian.php">Vegetarian Dishes</a>
  <a href="veganDishes.php">Vegan Dishes</a>
  <a href="salads.php">Salads</a>
  <a href="soups.php">Soups</a>
  <a href="Desserts.php">Desserts</a>
  <a href="worldCuisine.php">World Cuisine</a>
  <a href="beverages.php">Beverages</a>
  <a href="recipes.php">Back to recipes page</a>
  <br>
  <a href="index.php">Back to main page</a>
  
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Categories</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
	<div class="service">
		<div class="title">
			<h5>Desserts</h5>


            <!-- <input type="button" value="Add recipe" class="button"> -->
            <!-- <p style="text-align: center;">
						<a class="button" href="">Add Recipe</a>
					</p> -->
		</div>

<p style="text-align:center;">
<a class="button-addRecipe" href="#">Add Recipe</a>
</p>
		<!-- <div class="box">
			<div class="card">
                <div class="image"> <img src="images/meatdishes.jpeg"> </div>
				<h5><a href="MeatDishes.php">Meat Dishes</a></h5>
				<div class="pra">
					<p> 
                   The most delicious and abundant red meat dishes are on ChefBook in all their forms such as boiled, roasted, steak, stewed and baked.</p>
				</div>
			</div>

			<div class="card">
            <div class="image"> <img src="images/chickenDishes.jpeg"> </div>
				<h5><a href="chickenDishes.php">Chicken Dishes</a></h5>
				<div class="pra">
					<p>The most enjoyable and delicious recipes of chicken dishes are in ChefBook.</p>
				</div>
			</div>

			<div class="card">
            <div class="image"> <img src="images/fishdishes.jpeg"> </div>
				<h5><a href="fishDishes.php">Fish Dishes</a></h5>
				<div class="pra">
					<p>All fish recipes with rich protein and high nutritional values ​​are in ChefBook.</p>
				</div>
			</div>
            
		</div>
		<div class="box">
			<div class="card">
            <div class="image"> <img src="images/vegetabledishes.jpeg"> </div>
				<h5><a href="vegetableDishes.php">Vegetable Dishes</a></h5>
				<div class="pra">
					<p>The most practical vegetable recipes with delicious and healthy options are in ChecBook.</p>
				</div>
			</div>

			<div class="card">
            <div class="image"> <img src="images/d.jpg"> </div>
				<h5><a href="dietDishes.php"> Diet Dishes </a> </h5>
				<div class="pra">
					<p> The whole secret of losing calories in a healthy way and maintaining a healthy diet is in ChefBook.</p>
				</div>
			</div>

			<div class="card">
            <div class="image"> <img src="images/vegetarian.jpg"> </div>
				<h5><a href="vegetarian.php">Vegetarian Dishes</a></h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>
				</div>
			</div>
            
		</div>
        <div class="box">
			<div class="card">
            <div class="image"> <img src="images/vegan.jpg"> </div>
				<h5><a href="veganDishes.php">Vegan Dishes</a></h5>
				<div class="pra">
					<p>The healthiest herbal recipes, free from all animal foods, are only in ChefBook.</p>
				</div>
			</div>

			<div class="card">
            <div class="image"> <img src="images/salads.jpg"> </div>
				<h5><a href="salads.php">Salads</a></h5>
				<div class="pra">
					<p>All healthy vegetarian foods that increase your quality of life are in ChefBook.</p>
				</div>
			</div>

			<div class="card">
            <div class="image"> <img src="images/soup.jpg"> </div>
				<h5><a href="soup.php">Soups</a></h5>
				<div class="pra">
					<p>Healthy soup recipes that warm us up before we start our meals.</p>
				</div>
			</div>
            
		</div>
        <div class="box">
			<div class="card">
            <div class="image"> <img src="images/desserts.jpg"> </div>
				<h5><a href="desserts.php">Desserts</a></h5>
				<div class="pra">
					<p>Thousands of flavor-guaranteed dessert recipes are in ChefBook.</p>
				</div>
			</div>

			<div class="card">
            <div class="image"> <img src="images/WorldCuisine.jpg"> </div>
				<h5><a href="worldCuisine.php">World Cuisine</a></h5>
				<div class="pra">
					<p>The most delicious recipes from all over the world are in ChefBook with important tips and detailed explanations.</p>
				</div>
			</div>

			<div class="card">
            <div class="image"> <img src="images/b.jpg"> </div>
				<h5><a href="beverages.php">Beverages</a></h5>
				<div class="pra">
					<p>All refreshing and warming drink recipes and tips are in ChefBook.</p>
				</div>
			</div>
            
		</div>
	</div> -->

</div>
<section class="footer">
<div class="credit">
      created by <span> ChefBook </span> | all rights reserved
      
    </div>
</section>
    </body>
</html>


