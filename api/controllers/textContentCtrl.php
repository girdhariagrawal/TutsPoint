<?php 
	/*
		Controller for text based tutorials
	*/
	require_once("../config/db.php");
	$data = file_get_contents("php://input");
	$data = json_decode($data);
	$action = $data->action;
	if($action == "all") {
		try {
			$ID = isset($_POST['ID'] ) ? $_POST['ID'] : 0;
			$sql= "SELECT * FROM `CourseContent` LIMIT 20 OFFSET ".$ID.");"; 
			$stmt = $db->query($sql); 
			$resultSet = $stmt->fetch(PDO::FETCH_ASSOC);
			$content = Array();
			while($row = mysql_fetch_array($resultSet)) {
				$content[] = $row;
			}
			echo json_encode($content);
		} catch(PDOException $e) {
			echo "error ".$e;
		} catch(Exception $e) {
			echo "error ".$e;
		}
	} else if($action == "getOne") {
		try {
			$title = $_POST['title'];
			$sql= "SELECT * FROM `CourseContent` WHERE `TITLE` LIKE '%".$title."%' LIMIT 1);"; 
			$stmt = $db->query($sql); 
			$resultSet = $stmt->fetch(PDO::FETCH_ASSOC);
			if(isset($resultSet)) {
				echo $resultSet;
			}
		} catch(PDOException $e) {
			echo "error ".$e;
		} catch(Exception $e) {
			echo "error ".$e;
		}
	} else if($action == "publish") {
		try {
			$title = $data->title;
			$courseid = $data->courseid;
			$shortDescription = $data->shortDescription;
			$content = $data->courseContent;
			$sql= "INSERT INTO `CourseContent`(`Title`,`CourseID`,`ShortDescription`,`Content`,`Archived`,`Draft`) VALUES('".$title."','".$courseid."','".$shortDescription."','".$content."',False,False);"; 
			$stmt = $db->exec($sql); 
			if($stmt) {
				echo "Success";
			}
		} catch(PDOException $e) {
			echo "error ".$e;
		} catch(Exception $e) {
			echo "error ".$e;
		}
	} else if($action == "draft") {//need to change a bit
		try {
			$id = isset($_POST['ID']) ? $_POST['ID'] : False;
			$title = $_POST['title'];
			$courseid = $_POST['courseid'];
			$shortdescription = $_POST['shortdescription'];
			$content = $_POST['content'];
			$sql = "";
			if($id) {
				$sql= "UPDATE `CourseContent` SET `Title`= '".$title."',`CourseID`= '".$courseid."',`ShortDescription`='".$shortdescription."',`Content`='".$content."',`Draft`= True WHERE ID = '".$id."';"; 
			} else {
				$sql= "INSERT INTO `CourseContent`(`Title`,`CourseID`,`ShortDescription`,`Content`,`Draft`) VALUES('".$title."','".$courseid."','".$shortdescription."','".$content."',True);"; 
			}
			$stmt = $db->exec($sql); 
			if($stmt) {
				echo "Success";
			}
		} catch(PDOException $e) {
			echo "error ".$e;
		} catch(Exception $e) {
			echo "error ".$e;
		}
	} else if($action == "archive") {
		try {
			$postID = $_POST['postID'];
			$sql= "UPDATE `CourseContent` SET `Archived` = True WHERE ID = '".$postID."');"; 
			$stmt = $db->exec($sql); 
			if($stmt) {
				echo "Success";
			}
		} catch(PDOException $e) {
			echo "error ".$e;
		} catch(Exception $e) {
			echo "error ".$e;
		}
	} else if($action == "archive") {
		try {
			$postID = $_POST['postID'];
			$sql= "UPDATE `CourseContent` SET `Archived` = True WHERE ID = '".$postID."');"; 
			$stmt = $db->exec($sql); 
			if($stmt) {
				echo "Success";
			}
		} catch(PDOException $e) {
			echo "error ".$e;
		} catch(Exception $e) {
			echo "error ".$e;
		}
	} else if($action == "delete") {
		try {
			$postID = $_POST['postID'];
			$sql= "DELETE * FROM`CourseContent` WHERE ID = '".$postID."');"; 
			$stmt = $db->exec($sql); 
			if($stmt) {
				echo "Success";
			}
		} catch(PDOException $e) {
			echo "error ".$e;
		} catch(Exception $e) {
			echo "error ".$e;
		}
	} else if($action == "update") {
		try {
			$postID = $_POST['ID'];
			$title = $_POST['title'];
			$courseid = $_POST['courseid'];
			$shortdescription = $_POST['shortdescription'];
			$content = $_POST['content'];
			$sql= "UPDATE `CourseContent` SET `Title` = '".$title."',`CourseID` = '".$courseid."',`ShortDescription` = '".$shortdescription."',`Content` = '".$content."';"; 
			$stmt = $db->exec($sql); 
			if($stmt) {
				echo "Success";
			}
		} catch(PDOException $e) {
			echo "error ".$e;
		} catch(Exception $e) {
			echo "error ".$e;
		}
	}
 ?>