<!DOCTYPE html>
<html>

<head>
  <!-- import font awesome library for icons-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chefbook | About Us </title>

  <style type="">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
    .about{
    width: 1450px;
    padding: 88px 0px;

    background-color: rgb(255, 0, 0);
    }
    .about img{
    height: auto;
    width: 500px;
    margin: 25px;
    }
    .text h1{
      margin-bottom: 20px;
        color: white;
        font-size: 80px;
    }
    .text h5{

    color: white;
    font-size: 25px;
    text-transform: capitalize;
    margin-bottom: 25px;
    letter-spacing: 2px;
    }
    .text p{
    color: rgb(255, 255, 255);
    letter-spacing: 1px;
    line-height: 28px;
    font-size: 18px;
    margin-bottom: 45px;

    }
    .main{
    max-width: 95%;
    width: 1130px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;

    }
    span{
        color: rgb(246, 167, 50);
    }
    .button{
    background:rgb(246, 167, 50);
    color: white;
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 13px 30px;
    border-radius: 30px;
    transition: .4s;
    }
    .button:hover{
        background: transparent;
        border: 2px solid;
    }
    .go {
            background-color: #ff0000;
            color: white;
            padding: 16px 20px;
            border: solid 1px transparent;
            border-radius:0.5rem;
       
            }


        /*! start footer section */

.footer{
  background-color: var(--black-color);
  text-align: center;

}

.footer .search{
  display: flex;
  justify-content: center;

}

.search-input{
  font-size: 1.6rem;
  color: var(--black-color);
  padding: 1rem;
  text-transform: none;
  border-radius: 3rem;
}
.footer .search .search-input{
  width: 30rem;  
}

.footer .search .btn-primary{
  background-color: var(--main-color);
  padding: 1rem 2rem;
  margin-left: 1rem;
}

.footer .share{
  padding: 2rem 0;
} 

.footer .share a{
  width: 5rem;
  height: 5rem;
  line-height: 5rem;
  color: white;
  font-size: 2rem;
  border:  var(--border);
  border-radius: 50%;
  margin: 0.3rem;
} 

.footer .share a:hover{
  background-color: var(--main-color);

}

.footer .links{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;

}

.footer .links a{
  background-color: var(--main-color);
  padding: 0.7rem 2rem ;
  color: white;
  font-size: 2rem;  
}

.footer .links a:hover{
  background-color: var(--black-color);
  opacity: 0.7;
}

.footer .links a.active{
  background-color: var(--black-color);

}

.footer .credit{
  font-size: 2rem;
  color: white;
  font-weight: 300;
  padding-top: 1.5rem;
}

.footer .credit span{
 color: var(--main-color);
}


/*! end footer section */
  </style>

  <link rel="stylesheet" type="text/css" href="styles/style.css" >
</head>

<body>

<!-- start header section-->

    <header class="header" class="logo">
      <a href="#" class="logo">
        <img src="images/ChefBookLogo.jpeg" alt="logo">

      </a>
      <nav class="nav_bar"> 
        <a href="index.php" class="active" > Home </a>
        <a href="about.php" > About </a>
        <a href="#menu" > Menu </a>
        <a href="recipes.php" > Recipes </a>
        <a href="search.html" > Chefs </a>
        <a href="contact.php" > Contact </a>
        <a href="blog.php" > Blogs </a>
        <a href="login.php" > Login </a>
        <a href="logout.php" > Logout </a>
        <a href="accountSettings.php" > Account Settings </a>
       </nav>


       <div class="buttons"> 
        <button id="search-btn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>

        <button>
          <i class="fa-solid fa-heart"></i>
        </button>

        <button>
         <i class="fa-solid fa-bars"></i>
        </button>

       </div>

       <div class="search-form">
         
       </div>
      

    </header>

  <section class= "about">
<div class= "main">
<img src="images/chefabout.jpeg">
<div class="text">

<h1>ChefBook</h1>
<h5>About <span>Us</span></h5>
<p>ChefBook was born in 2022. It's created by 5 Bilgi University students. This site is for everyone who loves cooking and eating. We have some delicious recipes for you.
    We also show some world wide chefs like Oyku Naz Turkmen, Tugrul Yavuz Ates, Sema Mente, Simge Coban, Anas Hamadeh and. ChefBook is available on the website. You can enter the site
    from any place. You can order food. We are getting bigger everyday. Join us and follow our site. Enjoy.</p>
    <a href="index.php" class="button">Go to main page.</a>

</div>

</div>

</section>

    <!-- start footer section-->
  <section class="footer"> 
    <div class="search">
      <input type="text" class="search-input" name="" placeholder="Search">
      <button class="btn btn-primary"> search </button>
    </div>
    <div class="share">
      <a href="#" class="fab fa-facebook"> </a>
      <a href="#" class="fab fa-twitter"> </a>
      <a href="#" class="fab fa-instagram"> </a>
      <a href="#" class="fab fa-linkedin"> </a>
      <a href="#" class="fab fa-pinterest"> </a>
    </div>

    <div class="links">
    <a href="#" > Home </a>
        <a href="about.php" class="active"> About </a>
        <a href="#" > Menus </a>
        <a href="recipes.php" > Recipes </a>
        <a href="search.html" > Chefs </a>
        <a href="contact.php" > Contact </a>
        <a href="blog.php" > Blogs </a>
        <a href="login.php" > Login </a>
        <a href="logout.php" > Logout </a>
        <a href="accountSettings.php" > Account Settings </a>
    </div>

    <div class="credit">
      created by <span> ChefBook </span> | all rights reserved
      
    </div>
  </section> 
 <!-- end footer section-->
   
</body>

</html>