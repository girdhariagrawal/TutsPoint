<?php 
	/*
		authentication for user login 
	*/
	require_once("../config/db.php");
	$data = file_get_contents("php://input");
	$data = json_decode($data);
	$username = $data->name;
	$password = $data->password;
	session_start();
	try {
		$sql= "SELECT `username` FROM `Users` WHERE `username` = '".$username."' AND `password` = '".$password."';"; 
		$stmt = $db->query($sql); 
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if($row && $row['username']) {
			$_SESSION['username'] = $row['username'];
			echo $row['username'];
		}
	} catch(PDOException $e) {
		echo "error ".$e;
	}
 ?>
