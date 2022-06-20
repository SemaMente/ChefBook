<!DOCTYPE html>
<html>
  <head> 
     <!-- import font awesome library for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.minw.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ChefBook</title>
  </head>
  <style type="">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
     --main-color: #dc1b1b;
     --black-color: #121212;
     --border:  0.1rem solid rgba(255,255,255,0.3);
}
html::-webkit-scrollbar {
     width: 0.8rem;
     background-color: white;

}

html::-webkit-scrollbar-track{
     border-radius:3rem ;
     background-color: red;
}

html::-webkit-scrollbar-thumb{
     border-radius:3rem ;
     background-color: var(--black-color);
}

.header .logo img{
     height: 13rem;
     width: 25rem;
}

.header .search-form{
  position: absolute;
  top: 115%;
  right: 7%;
  color: white;
  width: 50rem;
  height: 5rem;
  display: flex;
  align-items: center;
  border-radius: 3rem;
  box-shadow: 0px 0px 25px 2px;

  transform: scaleY(0);

}

.header .search-form.active{
  transform: scaleY(1);

}


.header .search-form i{
  cursor: pointer;
  font-size: 2.2rem;
  margin-right: 1.5rem;
  color: var(--black-color);
}

.header .search-form input{
  width: 100%;
}



/*! start menu section */    

.menu .box-container {
     display: grid;
     grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
     grid-gap: 1.5rem;
}

.menu .box-container .box {
     padding: 3rem;
     background-color: white;
     border-radius: 3r
     display: flex;
     flex-direction: column;
     align-items: flex-start;
     justify-content: space-between;


}

.menu .box-container .box img{
     width: 100%;
     object-fit: cover;
}

.menu .box-container .box .menu_category{
  font-size: 2.5rem ;
  padding: 1rem 0;
  text-align: center;
  color: black;
  letter-spacing: 3px;


}

.menu .box-container .box h3{
  font-size: 1.4rem;
  text-align: center;

}

.menu .box-container .box .content{
  font-size: 1.4rem;
  padding: 1.3rem;

}


.heading{
     color: white;
     text-transform: uppercase;
     font-size: 4rem;
     margin-bottom: 3.5rem;
     border-bottom: 0.1rem solid white;
     
}

.btn:hover{
  opacity: 0.7;

}



/*! end menu section */
/*! start about us section */
.about .row{
  display: flex;
  flex-wrap: wrap;
  column-gap: 2.5rem;
}
.about .row .image{
  flex: 1 1 45rem ;
  width: 100%;
}

.about .row img{
  
  width: 100%;
}

.about .row .contentPage{
    flex: 1 1 45rem ;
}

.about .row .contentPage h3{
    font-size: 3rem;
    color: white;
}

.about .row .contentPage p{
    font-size: 1.6rem;
    color: white;
    padding: 1rem 0;
    line-height: 1.8;
}

/*! end about us section */


/*! start blog section */
.blog .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem,1fr));
   gap: 1.5rem;
}

.blog .box-container .box{
  background-color: white;
  border-radius: 3rem;
}
.blog .box-container .image{
  height: 25rem;
  overflow: hidden;
  width: 100%;
  border-top-left-radius: 3rem;
  border-top-right-radius: 3rem;

}

.blog .box-container .image img{
  height: 100%;
  object-fit: cover;
  width: 100%;   

}

.blog .box-container .box:hover .image img{
  transform: scale(1.2);

}

.blog .box-container .box .content {
  padding: 2rem;

}

.blog .box-container .box .content .title {
  line-height: 1.5rem;
  font-size: 2.5rem;
  
}
.blog .box-container .box .content span {
  display:block ;
  padding-top: 1rem;
  font-size: 2rem;
  
}

.blog .box-container .box .content p {
  font-size: 1.6rem;
  line-height: 1.8rem;
  color: white;
  padding: 1rem 0;

}
/*! end blog section */


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

       <div class="search-form">
         <input type="text" class="search-input" id="search-box" name="" placeholder="search here">
         <i class="fa-solid fa-magnifying-glass"> </i>
       </div>
      

    </header>

    <!-- end header section-->


    <!-- start home section-->
    <section class="home" id="home">
      <div class="content">
      <h3> Share recipes or learn how to cook and what to cook quickly </h3>
      <p>
        If you don't know how to cook, you can learn on Chef Book by looking food recipes. Or if you don't know what will you cook, you can find it from our Menu section.

      </p>
      </div>
    </section>

    <!-- end home section-->
    <!-- start menu section-->
    <section class="menu" id="menu">
      <h1 class="heading"> menu </h1>
      <div class="box-container">
        <div class="box">
        <a href="breakfastmenus.html">
          <div class="box-head">
            <img src="images/breakfastMenu.jpg" alt="menu">
            <div class="menu_category">BREAKFAST MENUS </div>
            
            
          </div>
          </a>

          
        </div>

        <div  class="box">
          <a href="dinermenus.html">
          <div class="box-head">
            <img src="images/steak.png" alt="menu">
            <div class="menu_category">DINNER MENUS </div>
            
          </div>
          
          </a>
        </div>

        <div  class="box">
        <a href="lunchmenus.html">
          <div class="box-head">
            <img src="images/lunch.png" alt="menu">
            <div class="menu_category">LUNCH MENUS </div>
            
          </div>
          </a>
        </div>

        <div class="box">
        <a href="dietmenus.html">
          <div class="box-head">
            <img src="images/diet.png" alt="menu">
            <div class="menu_category">DIET MENUS </div>
          </div>
        </a>

        </div>

        
      </div>
    </section>

  <!-- end menu section-->

  <!-- start about section-->
    <section class="about" id="about">
      <h1 class="heading"> about us </h1>
      <div class="row">
        <div class="image">
          <img src="images/content.png">
        </div>

        <div class="contentPage"> 
        <h3> Thinking of what to cook?</h3>
        <p> ChefBook is a platform where users can share their recipes, photos of the dishes they cook, and showcase their work. </p>
        <p>  </p>
        <p>  </p>
        
   
        <a href="#" class="btn"> Learn More  </a>
        
         
      </div>
      </div>
    

    </section>

  <!-- end about section-->

  <!-- start contact section-->
  <section class="contact" id="contact">
    <h1 class="heading"> Contact Us </h1>

    
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
     

  <!-- end contact section-->

  <!-- start blogs section-->
  <section class="blog">
    <h1 class="heading"> Blog </h1>
    <div class="box-container">
     <div class="box">
      <div class="image">
      <img src="images/sugarBlog.jpg">
      </div> 
     <div class="content">
       <a href="#" class="title"> All about sugar </a>
       <span> by admin/27st may,2022</span>
       <p>
        Sugars are carbohydrates. Like all carbohydrates, they provide a source of energy in our diet. Sugar is a term that includes all sweet carbohydrates, although the term most often is used to describe sucrose or table sugar, a ‘double sugar’. The body breaks down carbohydrates into simple sugars such as glucose, that can be readily used in the body. 
       </p>
       <a href="#" class="btn"> Read more </a>
       </div> 
     </div>

     <div class="box">
      <div class="image">
      <img src="images/sugarBlog.jpg">
      </div> 
     <div class="content">
       <a href="#" class="title"> All about sugar </a>
       <span> by admin/27st may,2022</span>
       <p>
   
       </p>
       <a href="#" class="btn"> Read more </a>
       </div> 
     </div>
     <div class="box">
      <div class="image">
      <img src="images/sugarBlog.jpg">
      </div> 
     <div class="content">
       <a href="#" class="title"> All about sugar </a>
       <span> by admin/27st may,2022</span>
       <p>
        
       </p>
       <a href="#" class="btn"> Read more </a>
       </div> 
     </div>
    </div> 
    </section>

   <!-- end blogs section-->

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
      <a href="#" class="active" > Home </a>
        <a href="about.php" > About </a>
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
 <script src="js/script.js"></script>  
      
 
  </body>
</html>
