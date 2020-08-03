<?php
	class Account {
		private $con;

		private $errorArray;

		public function __construct($con) {
			$this->errorArray = array();
			$this->con = $con;
		}
		

		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);

			if(empty($this->errorArray) == true) {
				//this referes to this class instance we are talking about
				return $this->insertUserDetails($un, $ln,$fn,$em,$pw);
				//Insert into db
				
			}
			else {
				return false;
			}

		
		}
		

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}
		private function insertUserDetails($un, $fn, $ln, $em, $pw) {
			$encryptedPw = md5($pw);
			$profilePic = "assets/images/profile-pics/head_emerald.png";
			$date = date("Y-m-d");

			//Checking to see what values are being instered into the DB
			 echo "INSERT INTO users VALUES (NULL, '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic'";

			$result = mysqli_query($this->con, "INSERT INTO users VALUES (NULL, '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic')");

			return $result;
		}

		

		private function validateUsername($un) {

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, Constants::$userNameChar);
				return;
			}
			$checkUserNameQuery = mysqli_query($this->con,"SELECT username FROM users WHERE username ='$un");
			if(mysqli_num_rows($checkUserNameQuery) != 0){
				array_push($this->errorArray,Constants::$UserNameTaken);
				return;
			}

		

		}

		private function validateFirstName($fn) {
			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray, Constants::$firstNameChar);
				return;
			}
		}

		private function validateLastName($ln) {
			if(strlen($ln) > 25 || strlen($ln) < 2) {
				array_push($this->errorArray, Constants::$lastNameChar);
				return;
			}
		}

		private function validateEmails($em, $em2) {
			if($em != $em2) {
				array_push($this->errorArray,Constants::$emailsDoNotMatch);
				return;
			}

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				//Calling the validations from another file
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}

			//TODO: Check that username hasn't already been used
			$checkUserEmailQuery = mysqli_query($this->con,"SELECT email FROM users WHERE email ='$em");
			if(mysqli_num_rows($checkUserEmailQuery) != 0){
				array_push($this->errorArray,Constants::$UserEmailTaken);
			}


		}
		public function login($un, $pw) {

			$pw = md5($pw);

			$query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");

			if(mysqli_num_rows($query) == 1) {
				return true;
			}
			else {
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}

		}

		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordsDoNotMatch);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordsNotAlphNumeric);
				return;
			}

			if(strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, Constants::$passwordsDoNotLength);
				return;
			}

		}



	}
?>