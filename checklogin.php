<?php
session_start();
require_once "connection.php";

if(isset($_POST["checklogin"])){
	
	$username = addslashes($_POST["username"]);
	$password = addslashes($_POST["password"]);
	$hash_password = md5($password);

	$spot_user = "SELECT * FROM users2 WHERE username = '$username' AND password = '$hash_password' LIMIT 1";

	$spot_user_results = $conn->query($spot_user);
	
	if($spot_user_results->num_rows > 0){
		
$_SESSION["authlog"] = $spot_user_results->fetch_assoc();
			
			$userId = $_SESSION["authlog"]["userId"];
			
			$update_status = "UPDATE users2 set status = 'online' WHERE userId = '$userId' LIMIT 1";

			if ($conn->query($update_status) === TRUE){
if ($conn->query($update_status) === TRUE) {
						if (($_SESSION["authlog"]["usertype"] == 1))	{
							@header("Location: dashboard.php");			
					exit();
						}else if (($_SESSION["authlog"]["usertype"] == 2)){
							@header("Location: index.php");			
					exit();
				}
		}
}

}
}


?>