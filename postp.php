<?php

include('connection.php');

if (isset($_POST["create"]))
{

	$post = $_POST["body"];
	$username = $_POST["username"];


			$insert_qry =  "INSERT INTO posts (username,body) VALUES ('$username','$post' )";
		if ($conn->query($insert_qry) === TRUE){
			
			header("Location:index.php");
			// echo "successfull";
		}else{
			echo "Error in ". $insert_qry .' ON '. $conn->error;			
		}
	}

	// $display_content = $_POST["display_content"];
		

		
		
 
?>