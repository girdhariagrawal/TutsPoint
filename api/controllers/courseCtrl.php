<?php 
	/*
		To Control All the Courses or Subjects
	*/
	require_once('../config/db.php');
	$data = file_get_contents("php://input");
	$data = json_decode($data);
	$action = $data->action;
	if($action == "add") {
		$query = "INSERT INTO `Course`(`NAME`) VALUES('".$data->coursename."');";
		$stmt = $db->exec($query);
		if(isset($stmt)) echo "Success";
	} else if($action == "getAll") {
		$query = "SELECT * FROM `Course`;";
		$stmt = $db->query($query);
		$resultSet = Array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$resultSet[] = $row;
		}
		echo json_encode($resultSet);
	}
?>