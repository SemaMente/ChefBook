<!DOCTYPE html>
<html>
<head>
<!-- import font awesome library for icons-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chefbook | Contact </title>
</head>
<style type="">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
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
<link rel="stylesheet" type="text/css" href="styles/style.css"  >
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

      

    </header>

    <!-- start contact section-->
  <section class="contact" id="contact">
    <h1 class="heading">  </h1>

    
    <div class="row">
    
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12032.401211648097!2d28.945861!3d41.0668001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f665fc172ad4624!2s%C4%B0stanbul%20Bilgi%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1653677690481!5m2!1str!2str" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>     

      <form action="Contact_page.php" method="post">
        <h3> get in touch </h3>
        <div class="inputBox">
          <i class="fas fa-user"> </i>
          <input type="text" name="Name" placeholder="name">
        </div>
        <div class="inputBox">
          <i class="fas fa-envelope"> </i>
          <input type="text" name="Email" placeholder="email">
        </div>
        <div class="inputBox">
          <i class="fas fa-phone"> </i>
          <input type="text" name="Number" placeholder="number">
        </div>
        <div class="inputBox">
          <input type="text" name="Message" placeholder="How can we help you?">
        </div>
        <input type="submit" class="btn" name="btnContact" value="contact">
      </form>
      </div>
      </section>

  <!-- end contact section-->

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
        <a href="index.php" > Home </a>
        <a href="#" > About </a>
        <a href="#" > Menu </a>
        <a href="#" > Recipes </a>
        <a href="#" > Chefs </a>
        <a href="contact.php" class="active" > Contact </a>
        <a href="blog.php"> Blogs </a>
        <a href="login.php" > Login </a>
        <a href="logout.php" > Logout </a>
        <a href="#" > Account Settings </a>
    </div>

    <div class="credit">
      created by <span> ChefBook </span> | all rights reserved
      
    </div>
  </section> 
 <!-- end footer section-->



</body>
</html>