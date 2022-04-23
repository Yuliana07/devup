<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'lesson_31');
	$query_text = "SELECT * FROM users WHERE login='{$_POST['login']}' AND password='{$_POST['password']}'";
	$query = mysqli_query($con, $query_text);

	if(mysqli_num_rows($query) > 0) {
		$user = mysqli_fetch_assoc($query);
		session_start();
		$_SESSION['user_id'] = $user['id'];
		header("Location: index.php");
	} else {
		header("Location: login.php");
	}
?>