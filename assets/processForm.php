<?php 

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud1') or die(mysqli_error($mysqli));  

$emailSent = '';
$passwordSent = '';
$name = '';
$lastName = '';
$address = '';
$city = '';
$state = '';
$CEP = '';

if(isset($_POST['sentLogin'])){
    $emailSent = $_POST['emailSent'];
    $passwordSent = $_POST['passwordSent'];
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $address= $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $CEP = $_POST['CEP'];

    $mysqli->query("INSERT INTO data (emailSent, passwordSent, name, lastName, address, city, state, CEP) VALUES('$emailSent', '$passwordSent', '$name', '$lastName', '$address', '$city', '$state', '$CEP')") or die ($mysqli->error);
    
    header("Location: pagHome.html");
    exit();
}

?>