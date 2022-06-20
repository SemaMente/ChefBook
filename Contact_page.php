<?php
include("classes/connect.php");
  if(isset($_POST['btnContact'])){
  	$ContactName= $_POST['Name'];
  	$ContactEmail= $_POST['Email'];
  	$ContactNumber= $_POST['Number'];
  	$ContactMessage = $_POST['Message'];

  if (empty($ContactName) || empty($ContactEmail) ||empty($ContactNumber) || empty($ContactMessage)){
  		header('location:index.php?error');	 		
  	
  }

  else {
  	$query = "insert into contact(name,email,number,message) values ('$ContactName','$ContactEmail','$ContactNumber','$ContactMessage')";
  	$DB = new Database();
  	$result = $DB->save($query);

  	if ($result == True) {
  		echo "<h2> Thanks, your message has been send  </h2>";
  		exit();
  	}
  	
  }
  

  }

?>