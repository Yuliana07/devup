<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk');
	$query_text = "SELECT * FROM users WHERE phone='{$_POST['phone']}' AND password='{$_POST['pass']}'";
	$query = mysqli_query($con, $query_text);

	if(mysqli_num_rows($query) > 0) {
		$stroka = mysqli_fetch_assoc($query);
		session_start();
		$_SESSION['id'] = $stroka['id'];
		header("Location: account.php?name={$users['name']}");
	} else {
		header("Location: index.php");
	}
?>
