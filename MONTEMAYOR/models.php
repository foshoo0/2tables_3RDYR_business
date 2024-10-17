<?php
function insertBarber($pdo, $fname, $lname, 
	$duty, $contact_number) {

	$sql = "INSERT INTO web_devs (fname, lname, 
    duty, contact_number) VALUES(?,?,?,?)";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$fname, $lname, 
    $duty, $contact_number]);

	if ($executeQuery) {
		return true;
	}
}

function getAllBarbers($pdo) {
	$sql = "SELECT * FROM barbers";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}
?>