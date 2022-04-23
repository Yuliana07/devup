<?php 
    $connection_to_database = mysqli_connect('127.0.0.1', 'root', '', 'twitter');
    $delete = "DELETE FROM tweets WHERE id = {$_GET['id']} ";
    $query = mysqli_query($connection_to_database, $delete);
    header("Location: Lichnkab.php");
    exit;
?>