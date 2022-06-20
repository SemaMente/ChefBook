<?php

class Signup
{
	private $error = "";
	public function evaluate($data)

	{
		//make sure that everything is not empty
		foreach ($data as $key => $value) {
			if(empty($value)){
				$this->error =$this->error . $key . "  is empty! <br>";
			}

			if($key == "email"){
				if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
					$this->error =$this->error . " invalid email address <br>";

				}
				
			}

			if($key == "first_name"){
				if (is_numeric($value)) {
					$this->error =$this->error . " first name can't be a numeric<br>";

				}

				if(strstr($value, " ")){
					$this->error =$this->error . " first name can't have spaces <br>";
				}
				
			}

			if($key == "last_name"){
				if (is_numeric($value)) {
					$this->error =$this->error . " last name can't be a numeric <br>";

				}

				if(strstr($value," ")){
					$this->error =$this->error . " last name can't have spaces <br>";
				}
				
			}

			if($key == "username"){
				if (is_numeric($value)) {
					$this->error =$this->error . " username can't be a numeric <br>";

				}

				if(strstr($value," ")){
					$this->error =$this->error . " username can't have spaces <br>";
				}
				
			}


		}
		if ($this->error == "") {
			//no error
			$this->create_user($data);
		}else{
			return $this->error;
		}

	}

	public function create_user($data){
		$first_name = ucfirst($data['first_name']);
		$last_name = $data['last_name'];
		$gender = $data['gender'];
		$username = $data['username'];
		$email = $data['email'];
		$password = $data['password'];

		//create these
		$url_address = strtoLower($first_name) . ".". strtolower($last_name) ;
		$userid= $this->create_userid();
		
        //save record to database
		$query = "insert into users(userid,first_name,last_name,gender,username,email,password,url_address) values ('$userid','$first_name','$last_name','$gender','$username','$email','$password','$url_address')";


        //create a database class object 
		$DB = new Database();
		$DB->save($query);


	}



	private function create_userid(){
        //length=digit
		$length= rand(4,19);
		$number= "";
		for ($i=1; $i <$length ; $i++) { 
			$new_rand = rand(0,9);
			$number = $number . $new_rand;

		}

		return $number;


	}


}