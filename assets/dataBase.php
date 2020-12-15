<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud1') or die(mysqli_error($mysqli));
?>