<?php 
include('mconfig.php');
?>
<?php

if (isset($_POST)){
		$name          = $_POST['name'];
		$email         = $_POST['email'];
		$phone         = $_POST['phone'];
		$crops         = $_POST['crops'];
		$invest        = $_POST['invest'];

		$sql = " INSERT INTO money (name,email,phone,crops,invest) VALUES(?,?,?,?,?) ";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name,$email,$phone,$crops,$invest]);
		if ($result){
			echo "Successfully Saved";
		}else{
			echo "There were errors while saving the data";
		}
	}else{
		echo " No data";
	}
?>
