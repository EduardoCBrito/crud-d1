<?php 

function deleteAddressesByCustomerId($conn, $customerId)
{
	return $conn->query('DELETE FROM addresses WHERE customer_id = ' . $customerId);
}

function getAddresses($conn)
{
	return $conn->query('SELECT * FROM addresses');
}

function getAddressesByCustomerId($conn, $customerId)
{
	return $conn->query('SELECT * FROM addresses WHERE customer_id = ' . $customerId);
}

function insertAddress($conn, $customerId, $address, $city, $state, $zip)
{
	$stmt = $conn->prepare("INSERT INTO `addresses` (`customer_id`, `address`, `city`, `state`, `zip`)
	    VALUES (:customer_id, :address, :city, :state, :zip)
	");

	$stmt->execute([
		':customer_id' => $customerId,
		':address' => $address,
		':city' => $city,
		':state' => $state,
		':zip' => $zip,
	]);
}