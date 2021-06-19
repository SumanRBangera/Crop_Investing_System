<?php 
include('lconfig.php');
?>
<?php

if (isset($_POST)){
		$name          = $_POST['name'];
		$email         = $_POST['email'];
		$password      = $_POST['password'];

		$sql = " INSERT INTO ilogin (name,email,password) VALUES(?,?,?) ";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name,$email,$password]);
		if ($result){
			echo "Successfully Saved";
		}else{
			echo "There were errors while saving the data";
		}
	}else{
		echo " No data";
	}
?>
