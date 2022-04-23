<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <style type="text/css">
  	@import 'https://fonts.googleapis.com/css?family=Press+Start+2P';
  .url {
    background-image: url(https://anima-uploads.s3.amazonaws.com/projects/6260d56f18e85c1cbd8a811a/releases/6262079c6f0e636314039634/img/unsplash-p0j-me6mgo4@1x.png);
    background-size: 100% 100%;
    height: 500px;
  }
  .text-2 {
    color: white;
    font-size: 30px;
    font-family: "Press Start 2P";
    margin-left: 150px;
  }
  .ash{
    text-decoration: none;
    color: white;
    font-size: 10px;
    margin-left: 10px;
    margin-top: 22px;
    font-family: 'Press Start 2P', cursive;
  }
  	.but{
  		border-radius: 30px;
  		width: 250px;
  		color: white;
  		margin-top: 50px;
  		margin-left: 110px;
  		font-family: 'Comfortaa';
  	}
  </style>
</head>
<body class="col-12" style="height: 1500px; background-image: url(https://cdn.discordapp.com/attachments/963462489868238878/967210145207705660/Group_58.png); background-size: 100% 100%;">
	<?php 
 	$connection_to_database = mysqli_connect('127.0.0.1', 'root', '', 'vk');
 	$select_user = "SELECT * FROM users WHERE id='{$_SESSION['id']}'";
 	$query_user = mysqli_query($connection_to_database, $select_user);
 	$user = mysqli_fetch_assoc($query_user);
 ?>
	<div class="col-12 row" style="height: 60px; background-color: #4F175D;">
    <img style="height: 55px; width: 70px; margin-left: 250px;" src="https://anima-uploads.s3.amazonaws.com/projects/6260d56f18e85c1cbd8a811a/releases/6262079c6f0e636314039634/img/group-6@2x.svg">   
    <div class="row">
      <img style="height: 29px; width: 20px; margin-left: 400px; margin-top: 15px;" src="https://cdn.discordapp.com/attachments/963462489868238878/967109930198917120/unknown.png">
      <a class="ash" href="index.php" style="margin-left: 20px;">
        Главная
      </a>
      <a class="ash" href="indexgor.php">
        Рейтинг
      </a>
      <a class="ash" href="1.php">
        Лотерея
      </a>
      <a class="ash" href="Lichnkab.php">
        Профиль
      </a>
      <?php 
      session_start();
      $con = mysqli_connect('127.0.0.1', 'root','', 'lesson_31');

      if(isset($_SESSION['user_id'])) {
        $select = "SELECT * FROM users WHERE id = {$_SESSION['user_id']}";
        $query = mysqli_query($con, $select);
        $select_user = mysqli_fetch_assoc($query);

        echo "Привет! " . $select_user['login'];
        echo "<a href='logout.php'> Выйти</a>";
      } else {
      ?>
        <div style="display: flex;">
          <a class="ash" href="login.php">Войти</a>
          <a class="ash" href="signup.php">Регистрация</a>
        </div>

        <?php 
          }
        ?>
    </div>
  </div>
	<div class="col-12" style="height: 500px;">
			<h1 class="ash" style="margin-top: 70px; font-size: 17px; margin-left: 240px; color: white;">
				<img style="height: 40px; width: 40px;" src="https://cdn.discordapp.com/attachments/963462489868238878/967297478464532490/unknown.png">
				Горячие проекты:
			</h1>
			<div class="row">
				<div style="margin-left: 200px;">
			    	<img style="height: 250px; width: 350px; margin-left: 50px; margin-top: 30px; border-radius: 10px;" src="https://cdn.discordapp.com/attachments/963462489868238878/967299770647470110/unknown.png">
				</div>
			    <div>
			        <h1 class="ash" style=" font-size: 20px; padding-top: 0px; margin-left: 20px; ">
			        	Шутер The Void
			        </h1>
			        <h1 class="ash" style=" font-size: 13px; margin-left: 20px; ">
			        	Организаторы: HealthyGol(1233)
			        </h1>
			        <button class="ash" style="color: white; margin-top: 10px; margin-left: 20px; height: 30px; width: 230px; background-color: #FF8516; border-radius: 20px; border: 1px solid white;">
							присоединиться
					</button>
					<h1 class="ash" style="padding-top: 40px; font-size: 14px; margin-left: 20px; margin-top: 10px; color: white; font-family: Arial">
			        	Контакты:
			        </h1>
			        <h1 class="ash" style="font-size: 14px; margin-left: 20px; color: white; margin-top: 0px; font-family: Arial">
			        	+7(999)999-99-99
			        </h1>
			        <h1 class="ash" style="font-size: 14px; margin-left: 20px; color: white; margin-top: 0px; font-family: Arial">
			        	healthygol@gmail.ru
			        </h1>
			    </div>
			</div>
	</div>
	<div class="col-12" style="height: 1600px;">
		<h1 class="ash" style="font-size: 17px; padding-top: 0px; margin-left: 180px; ">
			Горячие мероприятия:
		</h1>

		<div class="row">
			<div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #E385F2; margin-top: 40px; margin-left: 150px;">

					
				</div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #E385F2; margin-top: 20px; margin-left: 150px;">
					
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #E385F2; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #E385F2; margin-top: 20px; margin-left: 25px;">
						
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #E385F2; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #E385F2; margin-top: 20px; margin-left: 25px;">
					
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #E385F2; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #E385F2; margin-top: 20px; margin-left: 25px;">
					
				</div>
			</div>
		</div>
		<div class="row">
			<div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #E385F2; margin-top: 40px; margin-left: 150px;">

					
				</div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #E385F2; margin-top: 20px; margin-left: 150px;">
					
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #E385F2; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #E385F2; margin-top: 20px; margin-left: 25px;">
						
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #E385F2; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #E385F2; margin-top: 20px; margin-left: 25px;">
					
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #E385F2; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #E385F2; margin-top: 20px; margin-left: 25px;">
					
				</div>
			</div>
		</div>
		<div style="margin-left: 650px; margin-top: 50px;">
			<a href="" style="font-family: 'Comfortaa'; color: gray; font-size: 25px;">
				Загрузить еще
			</a>
		</div>
	</div>
</body>
</html>
