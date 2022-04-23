<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root','', 'lesson_31');

	if(isset($_SESSION['user_id'])) {
		$select = "SELECT * FROM users WHERE id = {$_SESSION['user_id']}";
		$query = mysqli_query($con, $select);
		$select_user = mysqli_fetch_assoc($query);

		echo "Привет! " . $select_user['login'];
		echo "<a href='form_post_add.php'> Создать пост </a>";
		echo "<a href='logout.php'> Выйти</a>";
	} else {
?>

<?php 
	}
?>

<?php 
	$get_all_posts_query = "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.id DESC";
	$posts_results = mysqli_query($con, $get_all_posts_query); 
?>
<?php 
	for($i = 0; $i < mysqli_num_rows($posts_results); $i++) {
	$post = mysqli_fetch_assoc($posts_results);
?>	
<!--один пост-->
<div class="">
	<p class=""><?php echo $post['login']; ?></p>
	<p class=""><?php echo $post['text'] ?></p>
</div>
<div class="">
	<img src="<?php echo $post['image'] ?>" alt="" class="" style="width: 250px;">
</div>
<form action="delete.php" method="GET">
	<input type="" name="id" value="<?php echo $users['id']?>" style="display: none;">
	<button class="btn btn-danger">Удалить</button>
</form>
<?php 
	} 
?>