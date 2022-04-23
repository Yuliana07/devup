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
  <link href="http://fonts.cdnfonts.com/css/russo-one" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
  <link href="http://fonts.cdnfonts.com/css/russo-one" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <style type="text/css">
  	@import 'https://fonts.googleapis.com/css?family=Press+Start+2P';
  	.but{
  		border-radius: 30px;
  		width: 250px;
  		color: white;
  		margin-top: 50px;
  		margin-left: 110px;
  		font-family: 'Comfortaa';
  	}
  	* {
		box-sizing: border-box;
	}

	body {
		background: #121314;
	}

	body > ul {
		width: 800px;
		height: 200px; 
		left: 50%;
		margin-left: -400px;
		margin-top: 500px;
		position: absolute;
	}
 
	ul > li {
		width: 25%;
		position: absolute;
		list-style-type: none;
		top: 0;
		padding: 20px;
		height: 200px; 
		opacity: 0;
		text-align: center;
		transition: 1s opacity; 
		margin-top: 450px;
	}

	.active {
		opacity: 1;
	}
  
	p {
		font-family: sans-serif;
		font-size: 13px;
    color: #646566;
		line-height: 1.5em;
	}

	strong { 
    color: #fff;
    font-weight: 700;
		font-size: 60px; 
    line-height: 100px; 
	}
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
  </style>
</head>
<body class="col-12" style="height: 1500px; background-image: url(https://cdn.discordapp.com/attachments/963462489868238878/967210145207705660/Group_58.png); background-size: 100% 100%;">
<?php 
	$connection_to_database = mysqli_connect("127.0.0.1", "root", "", "twitter");

	if(!$connection_to_database) {
		die("Connection failed: " . mysqli_connect_error());
	} else {
		echo "Подключение к БД успешно!";
	}

	$results = mysqli_query($connection_to_database, "SELECT * FROM tweets ORDER BY id DESC");

?>	
	<div class="col-12 row" style="height: 60px; background-color: #4F175D; margin-top: -25px;">
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
	<div class="col-12" style=" height: 1500px;">
		<div style="height: 250px; width: 1000px; background-color: #E385F2; margin-left: 250px; margin-top: 55px; display: inline-block; border-radius: 10px;">
			<div class="row">
				<div style="margin-left: 100px;">
					<img src="ic2.png" style="height: 120px; width: 120px; margin-top: 50px; display: inline-block;">
				</div>
				<div>
					<h1 style="font-family: 'Comfortaa'; font-size: 35px; margin-top: 45px; margin-left: 25px;">
						<?php echo $select_user['login']; ?>
					</h1>
					<h5 style="margin-left: 30px; margin-top: 15px;">starcoin: <span class="level">0</span> <img style="height: 17px; width: 20px; margin-left: 8px; margin-top: -7px;" src="https://cdn.discordapp.com/attachments/963462489868238878/967193234742857768/Group_33.png"> </h5>
					<div class="row">
						<h5 style="margin-left: 45px;">coin: <span class="count-markers">0</span> <img style="height: 15px; width: 18px; margin-left: 10px; margin-top: -5px;" src="https://cdn.discordapp.com/attachments/963462489868238878/967111303686660157/unknown.png"></h5>
					</div>
				</div>
				<div style="margin-top: 108px; margin-left: 100px;">
					<h1 style="font-family: 'Comfortaa'; font-size: 15px;">
						
					</h1>
				</div>
			</div>			
		</div>	
		<div>
			<h1 class="text-2" style="font-size: 20px; margin-top: 65px; margin-left: 240px; color: white; ">
				Портфолио:
			</h1>
			<div class="row" style="">
				<ul class="row" style="" id="c"> 		
					<li><p><strong><img style="width: 200px; height: 200px;" src="yel.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="pet.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="peo.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="gr.png"></strong></p></li>

					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li> 

					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li> 
				</ul>
			</div>
			<h1 class="text-2" style="font-size: 20px; padding-top: 380px; margin-left: 240px; color: white">
				Волонтерская история:
			</h1>
			<!-- Средняя колонка -->
				<div class="col-6 border-end border-start">
					<!--Добавить твит форма-->
					<div class="pt-2">						
						<div class="row">													
							<div class="col-10">
								<div class="col-12">
									<form method="GET" action="insert.php">
										<input style="margin-left: 200px;" type="text" class="form-control" placeholder="Автор" name="avtor_posta">
										<textarea style=" margin-left: 200px;" class="form-control mt-2" placeholder="Что нового?" name="tekst_posta"></textarea>
										<button style=" margin-left: 200px;" type="submit" class="btn btn-primary mt-2">Твитнуть</button>
									</form>
								</div>								
							</div>
						</div>				
							
					</div>

					<?php 
						for($i = 0; $i < mysqli_num_rows($results); $i++) {
							$tweets = mysqli_fetch_assoc($results);
					?>

						<div style="border: 1px solid white; margin-left: 200px;" class="col-10">
							<h6 style="color: white;"><?php echo $tweets['name']; ?></h6>
							<p style="color: white;"><?php echo $tweets['text']; ?></p>
							<img src="<?php echo $tweet['image']; ?>" class="w-100 rounded">
							<form action="delete.php" method="GET">
								<input type="" name="id" value="<?php echo $tweet['id']; ?>" style="display: none;">
							</form>
						</div>

					<?php 
						}
					?>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<div class="button" style="background-color: red; height: 30px; width: 150px; border-radius: 20px; margin-left: 50px; margin-top: 20px;">
					Проспонсировать
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 190px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<div class="button" style="background-color: red; height: 30px; width: 150px; border-radius: 20px; margin-left: 50px; margin-top: 20px;">
					Проспонсировать
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 185px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<div class="button" style="background-color: red; height: 30px; width: 150px; border-radius: 20px; margin-left: 50px; margin-top: 20px;">
					Проспонсировать
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 185px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<div class="button" style="background-color: red; height: 30px; width: 150px; border-radius: 20px; margin-left: 50px; margin-top: 20px;">
					Проспонсировать
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 185px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<div class="button" style="background-color: red; height: 30px; width: 150px; border-radius: 20px; margin-left: 50px; margin-top: 20px;">
					Проспонсировать
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 185px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<a href="" style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 620px; color: black; padding-top: 50px; display: inline-block;">
					Вся история
				</a>
		</div>	
	</div>
<script type="text/javascript">
	let button = document.querySelectorAll(".button");
	let level = document.querySelector(".level");
	let level2 = 0
	let score = 0
    let score_span = document.querySelector(".count-markers"); // переменная для отображения очков на сайте
    score_span.innerHTML = score; // для всех 7 дивов повторяем код
    for(let i = 0; i < 5; i++) { // для всех 7 дивов повторяем код
      button[i].onclick = function() { // даём онклики
        button[i].style.backgroundColor = "green";
        score ++ // при нажатии на див он пропадает
        score_span.innerHTML = score; // отображаем score в спане на сайте
        if(score == 4) { // если очков наберется 16
        	level2 ++
        	level.innerHTML = level2; // вывести этот алерт 
        }
      }
    }
	var timer = 5000;

var i = 0;
var max = $('#c > li').length;
 
	$("#c > li").eq(i).addClass('active').css('left','12%');
	$("#c > li").eq(i + 1).addClass('active').css('left','28%');
	$("#c > li").eq(i + 2).addClass('active').css('left','44%');
	$("#c > li").eq(i + 3).addClass('active').css('left','60%');
 

	setInterval(function(){ 

		$("#c > li").removeClass('active');

		$("#c > li").eq(i).css('transition-delay','0.25s');
		$("#c > li").eq(i + 1).css('transition-delay','0.5s');
		$("#c > li").eq(i + 2).css('transition-delay','0.75s');
		$("#c > li").eq(i + 3).css('transition-delay','1s');

		if (i < max-4) {
			i = i+4; 
		}

		else { 
			i = 0; 
		}  

		$("#c > li").eq(i).css('left','12%').addClass('active').css('transition-delay','1.25s');
		$("#c > li").eq(i + 1).css('left','28%').addClass('active').css('transition-delay','1.5s');
		$("#c > li").eq(i + 2).css('left','44%').addClass('active').css('transition-delay','1.75s');
		$("#c > li").eq(i + 3).css('left','60%').addClass('active').css('transition-delay','2s');
	
	}, timer);

</script>
</body>
</html>
