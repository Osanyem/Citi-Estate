<?php

	class Property {

		var $connect;

		function __construct() {
			$this->connect = new Mysqli('localhost', 'root', '', 'realestatedb');

		}


		function list_prop($location, $size, $lot_size, $bedrooms, $bathrooms, $price, $property_type, $description, $userid, $option) {

			$sql = "INSERT INTO property SET 
					property_sellerid='$userid',
					property_bedrooms='$bedrooms',
					property_bathrooms='$bathrooms', 
					property_location='$location', 
					property_size='$size',
					property_lotsize='$lot_size',
					property_price='$price',
					property_description='$description',
					property_option	='$option',
					property_type='$property_type'";

			$this->connect->query($sql);
			
			$regid = $this->connect->insert_id;
			return $regid;						


		}


		function getDetails($userid) {

			$sql =  "SELECT * FROM property WHERE property_sellerid = '$userid'";

    		$result = $this->connect->query($sql);

    		$details =[];

   		if($result->num_rows > 0){
   			while($t=$result->fetch_assoc()){
			$details[] = $t;
   			}
   			

   		}  
   		
   		return $details;

		}

		function editInfo($id,$userid) {

			$sql =  "SELECT * FROM property WHERE property_id = '$id' AND property_sellerid = '$userid'";

    		$result = $this->connect->query($sql);

    		$details =[];

    		if ($result->num_rows > 0) {
   			$details = $result->fetch_assoc();
   		}  
   		
   			return $details;
   			

   		}  
   		

  	function upload($file_array, $prop_id, $option) {

  		for ($i=0; $i <count($file_array['pic']['tmp_name']); $i++) {

  		$filename = $file_array['pic']['tmp_name'][$i];
  		if($filename !=''){
  		$original_name = $file_array['pic']['name'][$i];
  		$new_name = md5(microtime()) . $original_name;
  		$filesize = $file_array['pic']['size'][$i];
  		$allowed_extensions = array('jpg','png','jpeg');
  		$extension = @end(explode('.',$original_name));
  		$error = array();

  		if(!in_array($extension, $allowed_extensions)){
		$error[] = "This extension is not allowed";
		}	

		if($filesize > 1000000){ 
		$error[] = "File is too large";
		}
		if(empty($error)){

		$location = "../uploaded/$new_name";
		move_uploaded_file($filename, $location);
		$id_img=($i<1)?'1':'0';

		$sql = "INSERT INTO property_images SET property_id='$prop_id', image_location='$new_name', display_id='$id_img', img_option='$option'";
		$this->connect->query($sql);
  		}}


  	}
	}

		function deleteProp($propid) {

			$sql =  "DELETE FROM prop WHERE property_id = '$propid'";

    		$result = $this->connect->query($sql);

   		if($result->affected_rows > 0){
   			header('location:../successfuldeleteprop.php');
   		}
   		else{ 
   			header('location:../unsuccessfuldeleteprop.php');
   		}
		}
}




?>