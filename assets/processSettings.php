<?php 

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud1') or die(mysqli_error($mysqli));  

$id = 0;
$update = false;
$emailSent = '';
$passwordSent = '';

if(isset($_POST['save'])){
    $emailSent = $_POST['emailSent'];
    $passwordSent = $_POST['passwordSent'];

    $mysqli->query("INSERT INTO data (emailSent, passwordSent) VALUES('$emailSent', '$passwordSent')") or die ($mysqli->error);
    
    $_SESSION['message'] = 'Record has been saved!';
    $_SESSION['msg_type'] = 'success';
    
    header("Location: pagSettings.php");
    exit();
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data where id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = 'Record has been deleted!';
    $_SESSION['msg_type'] = 'danger';
    
    header("Location: pagSettings.php");
    exit();
}


if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data where id=$id") or die($mysqli->error());
    if($result->num_rows ==1){
        $row = $result->fetch_array();
        $emailSent = $row['emailSent'];
        $passwordSent = $row['passwordSent'];
      
    }
   
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $emailSent = $_POST['emailSent'];
    $passwordSent = $_POST['passwordSent'];
    
    $mysqli->query("UPDATE data SET emailSent='$emailSent', passwordSent='$passwordSent' WHERE id=$id") or die($mysqli->error);
    
    $_SESSION['message'] = 'Record has been update!';
    $_SESSION['msg_type'] = 'warning';
    
    header("Location: pagSettings.php");
}

?>