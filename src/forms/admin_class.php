<?php



class Admin
{

	var $connect;

	function __construct()
	{
		$this->connect = new Mysqli('db', 'root', 'rootpassword123', 'realestatedb');


		session_start();
	}


	function login($username, $password)
	{

		$encrypted_pwd = md5($password);

		$qry = "SELECT * FROM admin_details WHERE admin_username = '$username' AND admin_password = '$encrypted_pwd' LIMIT 1";

		$result = $this->connect->query($qry);

		if ($result->num_rows > 0) {
			$info = $result->fetch_assoc();
			header('location:../admin_profile.php');
			$_SESSION['adUsername'] = $info['admin_username'];
		} else {
			header('location:../admin_login.php');
		}

	}


	function getPropDetails()
	{

		$sql = "SELECT * FROM property";

		$result = $this->connect->query($sql);

		$details = [];

		if ($result->num_rows > 0) {
			while ($rows = $result->fetch_assoc()) {
				$details[] = $rows;
			}

			return $details;

		}
	}

	function getUserDetails()
	{

		$sql = "SELECT * FROM user";

		$result = $this->connect->query($sql);

		$details = [];

		if ($result->num_rows > 0) {
			while ($rows = $result->fetch_assoc()) {
				$details[] = $rows;
			}

			return $details;

		}


	}

	function getPropImg($option)
	{

		$sql = "SELECT * FROM property_images WHERE display_id = '1' AND img_option='$option'";

		$result = $this->connect->query($sql);

		$details = [];

		if ($result->num_rows > 0) {
			while ($rows = $result->fetch_assoc()) {
				$details[] = $rows;
			}

			return $details;

		}
	}

	function getAllPropImg($prop_id)
	{

		$sql = "SELECT * FROM property_images WHERE property_id = '$prop_id'";

		$result = $this->connect->query($sql);

		$details = [];

		if ($result->num_rows > 0) {
			while ($rows = $result->fetch_assoc()) {
				$details[] = $rows;
			}

			return $details;

		}
	}


	function getSpecPropDetails($prop)
	{

		$sql = "SELECT * FROM property WHERE property_id = '$prop'";

		$result = $this->connect->query($sql);

		$details = [];

		if ($result->num_rows > 0) {
			$rows = $result->fetch_assoc();
			$details = $rows;
		}

		return $details;

	}

	function getPropDetailsOpt($option)
	{

		$sql = "SELECT * FROM property WHERE property_option='$option'";

		$result = $this->connect->query($sql);

		$details = [];

		if ($result->num_rows > 0) {
			while ($rows = $result->fetch_assoc()) {
				$details[] = $rows;
			}

			return $details;

		}
	}

	function getSpecUserDetails($propsellerid)
	{

		$sql = "SELECT * FROM user WHERE user_id = '$propsellerid'";

		$result = $this->connect->query($sql);

		$details = [];

		if ($result->num_rows > 0) {
			$rows = $result->fetch_assoc();
			$details = $rows;
		}

		return $details;

	}

	function deleteUser($userid)
	{

		$sql = "DELETE FROM user WHERE user_id = '$userid'";

		$result = $this->connect->query($sql);

		if ($this->connect->affected_rows > 0) {
			header('location:../successfuldeleteuser.php');
		} else {
			header('location:../unsuccessfuldeleteuser.php');
		}
	}

}

?>