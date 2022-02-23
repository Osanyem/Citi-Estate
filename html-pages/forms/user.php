<?php



	class User {

		var $connect;

		function __construct() {
			$this->connect = new Mysqli('localhost', 'root', '', 'realestatedb');

			session_start();
		}


		function signup($user_fname, $user_lname, $user_email, $user_phone, $user_password) {

			$encrypted_pwd = md5($user_password);

			$sql = "INSERT INTO user SET 
					fname='$user_fname',
					lname='$user_lname',
					email='$user_email', 
					phone='$user_phone', 
					password='$encrypted_pwd'";

			$this->connect->query($sql);
			
			$regid = $this->connect->insert_id;

			$message = "Dear $user_fname,
						You can now login with your email : $user_email";

			@mail($email, 'Thank You', $message);						



			$_SESSION['userid'] = $regid;

			return $regid;			
		}

		function getDetails($userid) {

			$sql =  "SELECT * FROM user WHERE user_id = '$userid'";

    		$result = $this->connect->query($sql);

    		$details =[];

   		if($result->num_rows > 0){
   			$details = $result->fetch_assoc();
   		}  
   		
   		return $details;

		}


		function login($email, $pwd) {

			$encrypted_pwd = md5($pwd);

			$qry = "SELECT * FROM user WHERE email = '$email' AND password = '$encrypted_pwd' LIMIT 1";

			$result = $this->connect->query($qry);

			if($result->num_rows > 0){
				$info = $result->fetch_assoc();
				header('location:../profile.php');
				$_SESSION['userid'] = $info['user_id'];
			}
			else {
				header('location:../index.php');
			}

		}


		function update($user_fname, $user_lname, $user_email, $user_phone, $user_password, $id){

			$encrypted_pwd = md5($user_password);

			if (!empty($user_password)) {
				
				$sql = "UPDATE user SET 
					fname='$user_fname',
					lname='$user_lname',
					email='$user_email', 
					phone='$user_phone', 
					password='$encrypted_pwd' WHERE user_id='$id'";
			}
			else{
				$sql = "UPDATE user SET 
					fname='$user_fname',
					lname='$user_lname',
					email='$user_email', 
					phone='$user_phone' WHERE user_id='$id'";
			}
					$this->connect->query($sql);
					if ($this->connect->affected_rows > 0) {
						header('location:../successfulprofileupdate.php');
					}else{
						header('location:../unsuccessfulprofileupdate.php');
					}
					
		}









	}

?>