<?php

include 'Database.php';
include 'User.php';

$db = new Database();
$conn = $db->getConnection();

$user = new User($conn);

$matric = $_POST['matric'];
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

$user->createUser($matric, $name, $password, $role); 

//file ni yang collect data