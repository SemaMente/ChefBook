<?php 

class Login{
    private $error = "";


	public function evaluate ($data){
		
		$username = addslashes($data['username']);
		$password = addslashes($data['password']);
		
        //just return 1 row bcs should only one user
		$query = "select * from users where username='$username' limit 1 ";


		//to access database class
		$DB = new Database();
		//check if they're actually somebody with those details
		//if we get a result it means this user actually exists
		$result = $DB->read($query);

        //check password is correct
		if ($result) {

			$row = $result[0];

			if ($password == $row['password']) {
				//create a session data to keep user's id
				$_SESSION['chefbook_userid'] = $row['userid'];
			}

			else{
				$this->error.= "wrong password <br>";
			}
			
		}
		else{
			$this->error.="no such username was found <br>";
		}

		
		return $this->error;
		


	}

	public function check_login($id){

		$query = "select userid from users where userid= '$id' limit 1 ";

        //create db object to access database class
		$DB = new Database();
		$result = $DB->read($query);
   
		if ($result) {
		//found the user 

        return true;

		}

		return false;


	}



}