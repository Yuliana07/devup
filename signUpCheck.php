<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root','', 'lesson_31');
	$query_text = "INSERT INTO users (login, password) VALUES ('{$_POST['login']}', '{$_POST['password']}')";
	$results = mysqli_query($con, $query_text); 

	$_SESSION['user_id'] = mysqli_insert_id($con);
	header("Location: index.php");
?>
