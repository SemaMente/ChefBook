<?php
include("classes/connect.php");
include("classes/user.php");
include("classes/login.php");
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

 body{
        

    background:url('images/loginBackgroundImage.jpg') center center no-repeat fixed; 
    background-size: cover;
    font-family: tahoma;
    }
    
#blogform{
   margin:  auto; 
    width: 400px;
    margin-top:25px ;
    background: rgba(0, 0, 0, 0.2);
    padding: 80px;
    border : 5px solid darkred;
    border-radius: 16px;

}

label{
    display: block;
    text-transform: uppercase;
    padding: 5px;
    font-weight: bold;
    font-size: 15px;
  }

.button{
     margin-top: 1rem;
     display: inline-block;
     padding: 2rem 3.75rem;
     border-radius: 25rem;
     font-size: 1.3rem;
     color: white;
     background-color: var(--black-color);
     cursor: pointer;

}



/*! end blog section */
</style>
<link rel="stylesheet" type="text/css" href="styles/style.css"  >
<body>
<!-- start header section-->

    <header class="header" class="logo">
      <a href="#" class="logo">
        <img src="images/ChefBookLogo.jpeg" alt="logo">

      </a>
      <nav class="nav_bar"> 
        <a href="index.php" > Home </a>
        <a href="#about" > About </a>
        <a href="#menu" > Menu </a>
        <a href="#" > Recipes </a>
        <a href="#" > Chefs </a>
        <a href="contact.php" > Contact </a>
        <a href="blog.php" class="active" > Blogs </a>
        <a href="login.php" > Login </a>
        <a href="logout.php" > Logout </a>
        <a href="#" > Account Settings </a>
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
    <div class="box">
      <div class="image">
        <div class="content">
        <?php
          session_start();
          //check if user is logged in isset function is check variable is set 
        if (isset($_SESSION['chefbook_userid']) && is_numeric($_SESSION['chefbook_userid'])) {
          
          $id = $_SESSION['chefbook_userid'];
          $login = new Login();
          $result = $login->check_login($id);

          if ($result) {
             //retrieve user data
             $user = new User();
             $user_data = $user->get_data($id);

             if(!$user_data){
                header("Location: login.php");
              die;
             }

              } else {
            header("Location: login.php");
            die;
          }

               }else 

               {
           //if does not login
            header("Location: login.php");
            die;


             }


             //if user login can add blog start here
          
          if($_POST){
            $id = $_SESSION['chefbook_userid'];
            $title = $_POST["title"];
            $blogcontent = $_POST["blogcontent"];
            $blogphoto = $_POST["blogphoto"];
            

          if(empty($title) || empty($blogcontent) || empty($blogphoto)){
            echo '<script language="javascript">';
            echo 'alert("Please fill empty areas!")';
            echo '</script>';

          }

          else{
          $query = "insert into blogs(blog_title,blog_text,blog_photo) values ('$title','$blogcontent','$blogphoto')";
          $DB = new Database();
          $result = $DB->save($query);

          if ($result == True) {
              
              header("Location:blog.php");
            }

          }
          }
        ?>
       <form id="blogform" action="" method="post">
        <label>  Title of Blog </label> 
        <br>
        <input type="text" name="title" id="" class="form_control">
        <br>   <br>    <br>
        <label> Text </label>
        <br>
        <textarea name="blogcontent" id="" cols="30" rows="10" class="form_control" > </textarea>
        <br/>
        <label> Link of photo </label>
        <br>
        <input type="text" name="blogphoto" id="" class="form_control">
        <br>  <br>
      
        <input type="submit" value="Share" name="" class="button">
    
      
        </form>
       </div> 
     </div>
    </div>

	
    
</body>
</html>