<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>RANDOM JS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    body {
  margin: 0;
  padding: 0;
  background: #232F52;
}

button:focus {
  outline: none;
}

.start {
  position: absolute;
  top: calc(50% + 100px);
  left: 50%;
  background: #51D05E;
  transform: translate(-50%, -50%);
  width: 100px;
  height: 25px;
  border: 2px solid #4CBD58;
  color: white;
  font-weight: bold;
  border-radius: 5px;
  transition: 0.3s ease;
  user-select: none;
  cursor: pointer;
  filter: drop-shadow(2px 2px 2px rgba(89, 217, 102, 0.2));
}

.start:hover {
  background: #4CBD58;
}

.shadow {
  position: absolute;
  z-index: 2;
  left: 50%;
  top: 40%;
  transform: translate(-50%, -50%);
  border-radius: 10px;
  border: 2px solid white;
  width: 400px;
  height: 100px;
  box-shadow: inset 0px 0px 20px 0px black;
  transform: rotate(90deg);
}

.random {
  position: absolute;
  overflow: hidden;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 10px;
  width: 400px;
  height: 100px;
  background: #161D31;
  transform: rotate(90deg);
}

.cards {
  position: absolute;
  left: 0;
  top: 0;
  width: 2000px;
  height: 100%;
  transition: 5s ease;
}

.cards > div {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  float: left;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 20px;
  margin-top: 5px;
  margin-left: 5px;
  width: 100px;
  height: 90px;
  color: #6A6A6A;
  background: white;
  border-radius: 10px;
  transform: rotate(270deg);
}

.result {
  position: absolute;
  z-index: 10;
  left: 50%;
  top: 0;
  transform: translateX(-50%);
  border: 10px solid transparent;
  border-top: 20px solid #425DD8;
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.5));
}
  </style>
</head>
<body>
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
  <div class="col-12" style="height: 1500px; background-image: url(https://cdn.discordapp.com/attachments/963462489868238878/967210145207705660/Group_58.png); background-size: 100% 100%;">
    <div>
      <div class="row">
        <img src="https://cdn.discordapp.com/attachments/963462489868238878/967267923280400484/unknown.png" style="width: 10px; height: 17px; margin-top: 40px; margin-left: 170px;">
        <h1 class="ash" style="font-size: 15px; margin-top: 39px;">
          Фонд: <span class="count-markers">0</span>
        </h1>
        <img style="height: 18px; width: 20px; margin-left: 10px; margin-top: 38px;" src="https://cdn.discordapp.com/attachments/963462489868238878/967111303686660157/unknown.png">
      </div>
      <p class="ash" style="font-size: 10px; margin-top: 0px; margin-left: 155px;">
        Организатор: FallerWaltz
      </p>
      <div style="margin-top: 50px;">
        <a class="ash button" style="font-size: 13px; margin-left: 155px; color: #46C1FA;">
          Внести coin<
        </a>
      </div>
      <div class="row">
        <div>
          <p class="ash" style="font-size: 10px; margin-top: 25px; margin-left: 155px;">
            Участники:
          </p>
          <div class="row" style="background-color: #46C1FA; height: 30px; width: 250px; border-radius: 4px; margin-left: 155px; margin-top: 20px;">
            <div style="height: 25px; width: 25px; border-radius: 100px; background-color: #375AFF; margin-top: 3px; margin-left: 10px;">
              
            </div>
            <h1 style="font-family: 'Comfortaa'; font-size: 13px; margin-left: 10px; margin-top: 8px;">
              Username
            </h1>
          </div>
          <div class="row" style="background-color: #46C1FA; height: 30px; width: 250px; border-radius: 4px; margin-left: 155px; margin-top: 10px;">
            <div style="height: 25px; width: 25px; border-radius: 100px; background-color: #375AFF; margin-top: 3px; margin-left: 10px;">
              
            </div>
            <h1 style="font-family: 'Comfortaa'; font-size: 13px; margin-left: 10px; margin-top: 8px;">
              Username
            </h1>
          </div>
          <div class="row" style="background-color: #46C1FA; height: 30px; width: 250px; border-radius: 4px; margin-left: 155px; margin-top: 10px;">
            <div style="height: 25px; width: 25px; border-radius: 100px; background-color: #375AFF; margin-top: 3px; margin-left: 10px;">
              
            </div>
            <h1 style="font-family: 'Comfortaa'; font-size: 13px; margin-left: 10px; margin-top: 8px;">
              Username
            </h1>
          </div>
          <div class="row" style="background-color: #46C1FA; height: 30px; width: 250px; border-radius: 4px; margin-left: 155px; margin-top: 10px;">
            <div style="height: 25px; width: 25px; border-radius: 100px; background-color: #375AFF; margin-top: 3px; margin-left: 10px;">
              
            </div>
            <h1 style="font-family: 'Comfortaa'; font-size: 13px; margin-left: 10px; margin-top: 8px;">
              Username
            </h1>
          </div>
        </div>
        <div>
          <div class="row">
            <p class="ash" style="font-size: 10px; margin-top: 25px; margin-left: 55px;">
              +15
            </p>
            <img style="height: 15px; width: 18px; margin-left: 6px; margin-top: 22px;" src="https://cdn.discordapp.com/attachments/963462489868238878/967193234742857768/Group_33.png">
          </div>
          <div class="row" style="background-color: #E385F2; height: 30px; width: 250px; border-radius: 4px; margin-left: 40px; margin-top: 5px;">
            <div style="height: 25px; width: 25px; border-radius: 100px; background-color: #FF26C2; margin-top: 3px; margin-left: 10px;">
              
            </div>
            <h1 style="font-family: 'Comfortaa'; font-size: 13px; margin-left: 10px; margin-top: 8px;">
              Username
            </h1>
          </div>
          <div class="row" style="background-color: #E385F2; height: 30px; width: 250px; border-radius: 4px; margin-left: 40px; margin-top: 10px;">
            <div style="height: 25px; width: 25px; border-radius: 100px; background-color: #FF26C2; margin-top: 3px; margin-left: 10px;">
              
            </div>
            <h1 style="font-family: 'Comfortaa'; font-size: 13px; margin-left: 10px; margin-top: 8px;">
              Username
            </h1>
          </div>
          <div class="row" style="background-color: #E385F2; height: 30px; width: 250px; border-radius: 4px; margin-left: 40px; margin-top: 10px;">
            <div style="height: 25px; width: 25px; border-radius: 100px; background-color: #FF26C2; margin-top: 3px; margin-left: 10px;">
              
            </div>
            <h1 style="font-family: 'Comfortaa'; font-size: 13px; margin-left: 10px; margin-top: 8px;">
              Username
            </h1>
          </div>
        </div> 
          
      </div>
    </div>
      <div class="row" style="background-color: #46C1FA; height: 30px; width: 250px; border-radius: 4px; margin-left: 140px; margin-top: 10px;">
        <div style="height: 25px; width: 25px; border-radius: 100px; background-color: #375AFF; margin-top: 3px; margin-left: 10px;">
          
        </div>
        <h1 style="font-family: 'Comfortaa'; font-size: 13px; margin-left: 10px; margin-top: 8px;">
          Username
        </h1>
      </div>
  </div>
    <div class="shadow"></div>
    <div class="random">
      <div class="result"></div>
      <div class="cards">
        <div>1</div>
        <div>2</div>
        <div>3</div>
        <div>4</div>
        <div>5</div>
        <div>6</div>
        <div>7</div>
        <div>8</div>
        <div>9</div>
        <div>10</div>
        <div>11</div>
        <div>12</div>
        <div>13</div>
        <div>14</div>
        <div>15</div>
        <div>16</div>
        <div>17</div>
        <div>18</div>
      </div>
    </div>
  </div>
  <button style="margin-top: 50px;" class="start" onclick="start()">START</button>
  
  <script src="mine.js"></script>
</body>
<script type="text/javascript">
  var cards_block = document.querySelector('.cards');
  var cards = document.querySelectorAll('.cards > div');

  function start() {
    var random = Math.floor(Math.random() * 19); // От 0 до 8
    cards_block.style.left = -random * 50 + 'px';
    setTimeout(function() {
      random++;
      cards[random].style.background = '#7B90F7';
      cards[random].style.color = 'white';
    }, 5000)
  }

    let button = document.querySelectorAll(".button");
  let score = 0
  let score_span = document.querySelector(".count-markers"); // переменная для отображения очков на сайте
  score_span.innerHTML = score; // для всех 7 дивов повторяем код
  for(let i = 0; i < 5; i++) { // для всех 7 дивов повторяем код
    button[i].onclick = function() { // даём онклики
      score = score + 10 // при нажатии на див он пропадает
      score_span.innerHTML = score; // отображаем score в спане на сайте
    }
  }

</script>
</html>
