<?php


function getConnection()
{

$environment = 'local';

$db = [
    'local' => [
        'username' => 'root',
        'password' => 'root',
        'host' => 'db',
        'dbName' => 'dum'
    ]
];

	$conn = new \PDO('mysql:host=' . $db[$environment]['host'] . ';dbname=' . $db[$environment]['dbName'], $db[$environment]['username'], $db[$environment]['password'], array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	return $conn;
}