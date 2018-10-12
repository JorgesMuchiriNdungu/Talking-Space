<?php
session_start();
require_once "connection.php";

if(isset($_POST["logout"])){
	
			$userId = $_SESSION["authlog"]["userId"];
			
			$update_status = "UPDATE users2 set status = 'offline' WHERE userId = '$userId' LIMIT 1";

		
if ($conn->query($update_status) === TRUE) {
	session_destroy();
					header("Location: login.php");			
					exit();
						}
		}






?>