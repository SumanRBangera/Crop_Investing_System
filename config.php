<?php

$db_customer = "root";
$db_pass = "";
$db_name = "former";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_customer, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['create'])){
		$name          = $_POST['name'];
		$email         = $_POST['email'];
		$password      = $_POST['password'];

		$sql = " INSERT INTO flogin (name,email,password) VALUES(?,?,?) ";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name,$email,$password]);
		if ($result){
			echo "Successfully Saved";
		}else{
			echo "There were errors while saving the data";
		}
	}
?>	