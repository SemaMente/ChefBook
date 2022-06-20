<?php
      include("classes/connect.php");


?>
<!DOCTYPE html>
<html>
<head>
<!-- import font awesome library for icons-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chefbook | Blog </title>
</head>
<style type="">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
/*! start blog section */
.blog .box-container{
    display: flex;
    align-items: flex-end;
    align-content: space-around;
    flex-direction: column;
    justify-content: flex-start;
    flex-wrap: wrap;
    grid-gap: 25px;
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


#blog{
      
     display: inline-block;
     margin-left: 5rem;
     padding: 2rem 3.75rem;
     border-radius: 25rem;
     font-size: 1.5rem;
     color: white;
     background-color: white;
     cursor: pointer;
     margin-bottom: 1rem;

}

#blogtext{
  width: 325px;
  height: 153px;
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
<link rel="stylesheet" type="text/css" href="styles/style.css" >
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
<section class="blog">

<div id="blog" class="">
   <a href="addblog.php" > Add Blog </a>
   </div>
    
     
      <?php
      
      $DB = new Database();
      $veri = $DB->read ("SELECT * FROM blogs ORDER BY blog_id DESC");
    

      foreach($veri as $row){
        echo '
    <h1 class="heading">  </h1>
    <div class="box-container">
     <div class="box">
        <div class="image">
      <img src="'.$row["blog_photo"].'"    >
      </div> 
     <div class="content">
       <a href="#" class="title"> '.$row["blog_title"].' </a>
       <p> <textarea id="blogtext"> '.$row["blog_text"].'</textarea> </p>   

       </div> 
     </div> ';
    }
   ?>


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
        <a href="index.php" > Home </a>
        <a href="about.php" > About </a>
        <a href="#" > Menu </a>
        <a href="#" > Recipes </a>
        <a href="search.html" > Chefs </a>
        <a href="contact.php" > Contact </a>
        <a href="blog.php" class="active"> Blogs </a>
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