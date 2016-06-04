<?php
 $DBNAME = 'tutsPoint';
 $USERNAME = 'root';
 $SERVER_NAME = 'localhost';
 $PASSWORD = '';

 try {
  $db = new PDO("mysql:host=$SERVER_NAME;dbname=$DBNAME",$USERNAME, $PASSWORD);
  $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
 } catch(PDOExeception $e) {
  echo "Error";
 }
?>
