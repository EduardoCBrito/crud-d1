<?php
require_once('./../db/connection.php');
require_once('./../model/address.php');
require_once('./../model/contact.php');
require_once('./../model/customers.php');


$data = $_POST;

$conn = getConnection();

try{
	    $stmt = $conn->prepare("INSERT INTO `customers` (`name`, `dob`, `rg`, `cpf`, `facebook`, `instagram`, `twitter`, `linkedin`)
	    VALUES (:name, :dob, :rg, :cpf, :facebook, :instagram, :twitter, :linkedin)
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
	]);

	$lastId = $conn->lastInsertId();

	foreach ($data['phone'] as $key => $phone) {
		insertPhone($conn, $lastId, $data['phone_type'][$key], $phone);
	}

	foreach ($data['address'] as $keya => $address) {
		insertAddress(
			$conn, $lastId, $address, $data['city'][$keya], $data['state'][$keya], $data['zip'][$keya]
		);
	}
	header("Location: /index.php?page=list");
} catch(\Exeption $e) {

}