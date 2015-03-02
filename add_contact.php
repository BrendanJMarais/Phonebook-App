<?php
include('config.php');
$pdo = connect();
// adding new contact using PDO with try/catch to escape the exceptions
try {
	$sql = "INSERT INTO contacts (first_name, last_name, phone_number) VALUES (:first_name, :last_name, :phone_number)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);
	$query->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR);
	$query->bindParam(':phone_number', $_POST['phone_number'], PDO::PARAM_STR);
	$query->execute();
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessphone_number();
}

// list_contacts : this file displays the list of contacts in a table view
include('list_contacts.php');
?>