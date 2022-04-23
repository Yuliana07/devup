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
</style>
</head>
<body class="col-12" style="height: 2000px; background-image: url(https://cdn.discordapp.com/attachments/963462489868238878/967210145207705660/Group_58.png);">
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
  <div class="url col-12">
    <div style="margin-top: -25px;">
      <h1 class="ash" style="font-size: 30px; padding-top: 100px; padding-left: 400px;">
        Приложим все усилия!
      </h1>
      <h1 class="ash" style="padding-left: 550px; font-size: 13px;">
        Создадим будущее вместе
      </h1>
    </div>
    <div class="row">
      <a href="Lichnkab.php" class="ash" style="font-size: 13px; margin-left: 400px; margin-top: 130px;">
        Создать проект
        <img style="width: 15px; height: 25px;" src="https://cdn.discordapp.com/attachments/963462489868238878/966965716504969266/unknown.png">
      </a>
      <a href="indexgor.php" class="ash" style="font-size: 13px; margin-left: 260px; margin-top: 130px;">
        Найти проект
        <img style="width: 15px; height: 25px;" src="https://cdn.discordapp.com/attachments/963462489868238878/966965716504969266/unknown.png">
      </a>
    </div>
  </div>
  <div class="col-12 row" style="height: 900px; margin-top: -5px;">
      <a class="ash" style="font-size: 16px; margin-left: 200px; margin-top: 50px;" href="">
        Задонатить!
     </a>
    <div style="background-image: url(https://cdn.discordapp.com/attachments/963462489868238878/966946124801916929/Group_13.png); background-size: 100% 100%; height: 400px; width: 800px;">
    </div>
      <a class="ash" style="font-size: 16px; margin-left: 180px; margin-top: 30px;" href="">
        Требуется помощь!
     </a>
    <div style="background-image: url(https://cdn.discordapp.com/attachments/963462489868238878/966946123275186197/Group_14.png); background-size: 100% 100%; height: 400px; width: 800px; margin-left: -80px;">
    </div>
  </div>
  <div class="col-12 row" style="height: 400px; background-color: #46C1FA;">
    <div>
      <p class="ash" style="margin-top: -30px; padding-top: 30px; font-size: 15px; padding-left: 120px;">
        Почему только психи становятся программистами
      </p>
      <iframe style="margin-top: 20px; margin-left: 150px;" width="460" height="265" src="https://www.youtube.com/embed/nuFgqJcrxB8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div>
     <p class="ash" style="font-size: 14px; padding-top: 30px; margin-left: -100px;">
       Заголовок
     </p>
     <p class="ash" style="font-size: 10px; width: 400px; margin-left: -100px;">
       Тут какой-то увлекательный текст.Тут какой-то увлекательный текст.Тут какой-то увлекательный текст.Тут какой-то увлекательный текст.Тут какой-то увлекательный текст.Тут какой-то увлекательный текст.Тут какой-то увлекательный текст.
     </p>
   </div>
  </div>
  <div class="col-12" style="height: 200px; background-color: #4F175D; margin-top: -30px;">
    <p class="ash" style="padding-top: 60px;">
      Контакты: 8(999)999-99-99
    </p>
    <p class="ash">
      FAQ: https://docs.google.com/presentation/d/1d_NKbe_xz1IdE-3IlwCgWtcJZBSDlNaS/edit#slide=id.p3
    </p>
  </div>
</body>
</html>
