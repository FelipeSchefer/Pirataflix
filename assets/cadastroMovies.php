<?php
include_once 'dataBase.php';

$id = 0;
$linkMovie = $_POST['linkMovie'];
$title = $_POST['title'];

$mysqli->query("INSERT INTO movies (linkMovie, title) VALUES ('$linkMovie', '$title')") or die ($mysqli->error);

if($mysqli){
    echo '<script>alert("Video cadastrado com sucesso!);</script>';
        
    header("Location: movies.php");
    exit();
}else{
    echo '<script>alert("Não foi possivel cadastrar!);</script>';
    echo mysqli_error($mysqli);
}

?>