<?php
include('config.php');
$pdo = connect();
// deleting a member using PDO with try/catch to escape the exceptions
try {
	$sql = "DELETE FROM contacts WHERE id = :id";
	$query = $pdo->prepare($sql);
	$query->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
	$query->execute();
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
}

// list_members : this file displays the list of contacts in a table view
include('list_contacts.php');
?>