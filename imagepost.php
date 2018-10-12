<?php

include('connection.php');

if (isset($_POST["create"]))
{

	



		$target = "uploads/".basename($_FILES["image"]["name"]);


    $name = $_POST["username"];
	$description = $_POST["description"];


    $image = $_FILES["image"]["name"];
	


			$insert_qry =  "INSERT INTO images(username,description,image) VALUES ('$name','$description', '$image')";
		if ($conn->query($insert_qry) === TRUE){
			
			header("Location:viewbanner.php");
			// echo "successfull";
		}else{
			echo "Error in ". $insert_qry .' ON '. $conn->error;			
		}
	}

	// $display_content = $_POST["display_content"];
	

		
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There was a problem uploading image";
		}
		
		
 
?>