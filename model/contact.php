<?php 

function deleteContactsByCustomerId($conn, $customerId)
{
	return $conn->query('DELETE FROM contacts WHERE customer_id = ' . $customerId);
}

function getContacts($conn)
{
	return $conn->query('SELECT * FROM contacts');
}

function getContactsByCustomerId($conn, $customerId)
{
	return $conn->query('SELECT * FROM contacts WHERE customer_id = ' . $customerId);
}

function insertPhone($conn, $customerId, $type, $number)
{
	$stmt = $conn->prepare("INSERT INTO `contacts` (`customer_id`, `type`, `number`)
	    VALUES (:customer_id, :type, :number)
	");

	$stmt->execute([
		':customer_id' => $customerId,
		':type' => $type,
		':number' => $number,
	]);

}