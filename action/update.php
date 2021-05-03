<?php
$data = $_POST;
require_once('./../db/connection.php');
require_once('./../model/address.php');
require_once('./../model/contact.php');
require_once('./../model/customers.php');

$conn = getConnection();

try{
	    $stmt = $conn->prepare("UPDATE `customers` SET `name` = :name, `dob` = :dob, `rg` = :rg, `cpf` = :cpf, `facebook` = :facebook, `instagram` = :instagram, `twitter` = :twitter, `linkedin` = :linkedin WHERE id = :id
	");

	$stmt->execute([
		':name' => $data['name'],
		':dob' => $data['date'],
		':rg' => $data['rg'],
		':cpf' => $data['cpf'],
		':facebook' => $data['facebook'],
		':instagram' => $data['instagram'],
		':twitter' => $data['twitter'],
		':linkedin' => $data['linkedin'],
		':id' => $data['id'],
	]);
	// $lastId = $conn->lastInsertId();

	deleteContactsByCustomerId($conn, $data['id']);

	foreach ($data['phone'] as $key => $phone) {
		insertPhone($conn, $data['id'], $data['phone_type'][$key], $phone);
	}

	deleteAddressesByCustomerId($conn, $data['id']);

	foreach ($data['address'] as $keya => $address) {
		insertAddress(
			$conn, $data['id'], $address, $data['city'][$keya], $data['state'][$keya], $data['zip'][$keya]
		);
	}

	header("Location: /index.php?page=list");
} catch(\Exeption $e) {

}