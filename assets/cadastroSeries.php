<?php
include_once 'dataBase.php';

$id = 0;
$linkSeries = $_POST['linkSeries'];
$title = $_POST['title'];

$mysqli->query("INSERT INTO series (linkSeries, title) VALUES ('$linkSeries', '$title')") or die ($mysqli->error);

if($mysqli){
    echo '<script>alert("Video cadastrado com sucesso!);</script>';
        
    header("Location: series.php");
    exit();
}else{
    echo '<script>alert("Não foi possivel cadastrar!);</script>';
    echo mysqli_error($mysqli);
}

?>