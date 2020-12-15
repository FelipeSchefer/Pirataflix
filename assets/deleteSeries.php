<?php
include_once 'dataBase.php';


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM series where id='$id'");
    echo mysqli_error($mysqli);

    $_SESSION['message'] = 'Record has been deleted!';
    $_SESSION['msg_type'] = 'danger';

    header("Location: series.php");
    exit();
}


?>