<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud1') or die(mysqli_error($mysqli));

if(empty($_POST["emailSent"]) || empty($_POST["passwordSent"])){
    header("Location: index.html");
    exit();
}

$emailSent = mysqli_real_escape_string($mysqli, $_POST["emailSent"]);

$passwordSent = mysqli_real_escape_string($mysqli, $_POST["passwordSent"]);


$query = "Select * from data where emailSent = '{$emailSent}' and passwordSent = '{$passwordSent}'";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION["emailSent"] = $emailSent;
    header("Location: pagHome.html");
    exit();
}else{
    header("Location: index.html");
    exit();
}
?>