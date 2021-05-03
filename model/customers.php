<?php 

function getCustomers($conn)
{
	return $conn->query('SELECT * FROM customers');
}

function getCustomerById($conn, $id)
{
	$stmt = $conn->prepare('SELECT * FROM customers WHERE id = ?');
	$stmt->execute([$id]);
	$row = $stmt->fetch();
	return $row;
}