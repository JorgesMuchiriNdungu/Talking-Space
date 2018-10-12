<?php

include('connection.php');

if (isset($_POST["create"]))
{

	$username = $_POST["username"];
	$Fname = $_POST["full_name"];
	$phone = $_POST["phone_number"];
	$password = md5($_POST["password"]);
	$Email = $_POST["email"];

	
	$usertype = "2";
			$insert_qry =  "INSERT INTO users2 (full_name,email,phone_number,username,password,usertype) VALUES ('$Fname', '$Email',
			'$phone', '$username','$password','$usertype' )";
		if ($conn->query($insert_qry) === TRUE){
			
			header("Location:index.html");
			// echo "successfull";
		}else{
			echo "Error in ". $insert_qry .' ON '. $conn->error;			
		}
	}

	// $display_content = $_POST["display_content"];
		

		
		
 
?>