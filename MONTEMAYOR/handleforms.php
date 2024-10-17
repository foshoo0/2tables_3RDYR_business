<?php 

require_once 'dbconfig.php'; 
require_once 'models.php';

if (isset($_POST['insertBarberBtn'])) {

	$query = insertBarber($pdo, $_POST['fname'], $_POST['lname'], 
		$_POST['duty'], $_POST['contact_number']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Insertion failed";
	}

}
?>