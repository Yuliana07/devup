<?php
	$connection_to_database = mysqli_connect("127.0.0.1", "root", "", "twitter");
	$insert_query = "INSERT INTO tweets (name, text, avatar, image) VALUES ('{$_GET['avtor_posta']}', '{$_GET['tekst_posta']}', 'https://cdn.discordapp.com/attachments/760372831946670104/889329023329640488/1.jpg', 'https://miro.medium.com/max/1000/1*Ihj7I8mr8beVuRypZaEzGA.png')";
	$result_insert = mysqli_query($connection_to_database, $insert_query);
	header("Location: Lichnkab.php");
	exit;
?>