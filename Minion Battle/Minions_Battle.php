<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Minions Battle</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navigation bar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div style="text-align:center; color:white; padding: 10px">
        <h1>Minions Battle</h1>
      </div>

      <div class="contaniner-fluid" >
        <div style = "margin-top: 50px; float: left; border-radius: 20px; border: 1px solid #ffc107; width: 35%; margin-left: 30px;">
          <h1 style="text-align:center; color:white;">Tim Stats</h1>
          <p style="color:white; margin-left: 10px; "> HP: 70 - 100</p>
          <p style="color:white; margin-left: 10px; "> Strength: 70 - 80</p>
          <p style="color:white; margin-left: 10px; "> Defense: 45 - 55</p>
          <p style="color:white; margin-left: 10px; "> Speed: 40 - 50</p>
          <p style="color:white; margin-left: 10px; "> Luck: 10% - 30%</p>
          <h1 style="text-align:center; color:white;">Skills</h1>
          <p style="color:white; margin-left: 10px; ">Banana strike: Strike twice while it's his turn to atack. There's a 10% chance he will use this skill every time he attacks. </p>
          <p style="color:white; margin-left: 10px; ">Umbrella Shield: Takes only half of the usual damage when an enemy attacks. There's a 20% chance he will use this skill every time he defends. </p>
        </div>
      </div>

        <div>
          <button type="button" class="btn btn-outline-warning btn-lg ">Fight!</button>
        </div>

      <div class="contaniner-fluid" >
        <div style=" margin-top: 50px; float: right; border-radius: 20px; border: 1px solid #ffc107; width: 35%; margin-right: 30px; position: relative; top: -45px">
          <h1 style="text-align:center; color:white;">Enemy Stats</h1>
          <p style="color:white; margin-left: 10px; "> HP: 60 - 90</p>
          <p style="color:white; margin-left: 10px; "> Strength: 60 - 90</p>
          <p style="color:white; margin-left: 10px; "> Defense: 40 - 60</p>
          <p style="color:white; margin-left: 10px; "> Speed: 40 - 60</p>
          <p style="color:white; margin-left: 10px; "> Luck: 25% - 40%</p>
          <h1 style="text-align:center; color:white;">Skills</h1>
          <p style="color:white; margin-left: 10px; ">This enemy doesn't have a particular set of skills he can use.</p>
          <p style="color:white; margin-left: 10px; ">Both enemy stats and Tim stats will be selected randomly when a fight starts.</p>
        </div>
      </div>

      <div>
        <img src="good-minion.png" alt="" class="img-fluid" id="good_minion">
      </div>

      <div>
        <img src="evil-minion.png" id="evil_minion" alt="">
      </div>

      <?php 
      class Minion {
        var $Health;
        var $Strength;
        var $Defense;
        var $Speed;
        var $Luck;


        function __construct($Health, $Strength, $Defense, $Speed, $Luck) {
          $this->Health = $Health;
          $this->Strength = $Strength;
          $this->Defense = $Defense;
          $this->Speed = $Speed;
          $this->Luck = $Luck;
        }
      }
      ?>

     <div class="contaniner-fluid">
      <div style="position: relative; left: 40px; border-radius: 20px; width: 1800px; margin-top: -100px; height: auto; border:1px solid #ffc107; float: left;"> 
      <h1 style="text-align:center; color:white;">Minions Stats:</h1>
        <?php 
        $Tim = new Minion(rand(70,100), rand(70,80), rand(45,55), rand(40,50), rand(10,30));
        $Enemy = new Minion(rand(60,90), rand(60,90), rand(40,60), rand(40,60), rand(25,40));
        echo "<div style = \"display: inline-block;\">";
        echo "<p style=\"color:white; margin-left: 10px; \">Tim Health: $Tim->Health</p>";
        echo "<p style=\"color:white; margin-left: 10px; \">Tim Strength: $Tim->Strength</p>";
        echo "<p style=\"color:white; margin-left: 10px; \">Tim Defense: $Tim->Defense</p>";
        echo "<p style=\"color:white; margin-left: 10px; \">Tim Speed: $Tim->Speed</p>";
        echo "<p style=\"color:white; margin-left: 10px; \">Tim Luck: $Tim->Luck</p>";
        echo "</div>";
        echo "<br>";
        echo "<div style=\"display: inline-block; float: right; position: relative; top: -200px; right: 20px;\">";
        echo "<p style=\"color:white; margin-left: 10px; \">Enemy Health: $Enemy->Health</p>";
        echo "<p style=\"color:white; margin-left: 10px; \">Enemy Strength: $Enemy->Strength</p>";
        echo "<p style=\"color:white; margin-left: 10px; \">Enemy Defense: $Enemy->Defense</p>";
        echo "<p style=\"color:white; margin-left: 10px; \">Enemy Speed: $Enemy->Speed</p>";
        echo "<p style=\"color:white; margin-left: 10px; \">Enemy Luck: $Enemy->Luck</p>";
        echo"</div>";

        function turnTim($Tim, $Enemy) {
          if($Tim->Speed > $Enemy->Speed)
          {
  
              return 1;
          }
          elseif ($Tim->Speed == $Enemy->Speed)  
          {
              if($Tim->Luck >= $Enemy->Luck)
              {
                  return 1;
              }
          }
          return 0;
      }
        

      function Damage($Tim, $Enemy, $turn) {
        if($turn == 1)
        {
            if(Banana_strike() == true)
            {
                $DMG = 2*$Tim->Strength - $Enemy->Defense;
                if($DMG < 0)
                {
                  $DMG = 0;
                }
                echo "<h2 style=\" color:white; margin-left: 15px;\">Tim used Banana strike for $DMG.</h2>";
            }
            else
            {
                $DMG = $Tim->Strength - $Enemy->Defense;
            }
        }
        else
        {
            $DMG = $Enemy->Strength - $Tim->Defense;
            if(Umbrella_shield() == true)
            {
                $DMG = 0.5*$Enemy->Strength - $Tim->Defense;
                if($DMG < 0)
                {
                  $DMG = 0;
                }
                echo "<h2 style=\" color:white; margin-left: 15px;\">Tim used Umbrella shield for $DMG.</h2>";
            }
        }
        return $DMG;
     }

      // Tim Skills: 
      function Banana_strike()
      {
        $chance = 10;
        $random = rand(1,100);
        if($random < $chance + 1)
        {
          return true;
        }
        else
        {
          return false;
        }
      }

      function Umbrella_shield()
      {
        $chance = 20;
        $random = rand(1,100);
        if($random < $chance + 1)
        {
          return true;
        }
        else
        {
          return false;
        }
      }

        //Enemy Skills: Since the enemy does not have any skills I didnt implement anything here


        echo "<h1 style=\"text-align:center; color:white; margin-left: 145px;\">Battle Results:</h1>";
        $rounds = 1;
        $turn = turnTim($Tim, $Enemy); 
        while ( $Tim->Health > 0 && $Enemy->Health > 0 && $rounds < 21)
        {
          echo "<h2 style=\" color:white; margin-left: 15px;\">Atack $rounds:</h2>";
          if($turn == 1)
          {
            echo "<p style=\"color:white; margin-left: 10px; font-size: 30px; \">Tim atacks!</p>";
            $DMG = Damage($Tim,$Enemy,$turn);
            $Enemy->Health = $Enemy->Health - $DMG;
            $turn = !$turn;
            echo "<rev style=\"color:white; margin-left: 10px; font-size: 30px; \">Tim attacks for: $DMG .</rev>";
            echo "<br>";
            if($Enemy->Health < 0)
            {
              $Enemy->Health = 0;
              echo "<rev style=\"color:white; margin-left: 10px; font-size: 30px; \">Enemy health becomes: $Enemy->Health.</rev>";
            }
            else
            {
              echo "<rev style=\"color:white; margin-left: 10px; font-size: 30px; \">Enemy health becomes: $Enemy->Health.</rev>";
            }

          }
          elseif ($turn == 0)
          {
            echo "<p style=\"color:white; margin-left: 10px; font-size: 30px; \">Enemy atacks!</p>";
            $DMG = Damage($Tim,$Enemy,$turn);
            $Tim->Health = $Tim->Health - $DMG;
            $turn = !$turn;
            echo "<rev style=\"color:white; margin-left: 10px; font-size: 30px; \">Enemy attacks for: $DMG .</rev>";
          echo "<br>";
            if($Tim->Health < 0)
            {
              $Tim->Health = 0;
              echo "<rev style=\"color:white; margin-left: 10px; font-size: 30px; \">Tim health becomes: $Tim->Health.</rev>";
            }
            else
            {
              echo "<rev style=\"color:white; margin-left: 10px; font-size: 30px; \">Tim health becomes: $Tim->Health.</rev>";
            }
            echo "<br>";
          } 
          $rounds++;
      }
      echo "<h1 style=\"text-align:center; color:white; margin-left: 145px;\">Game Over!</h1>";
    ?>
       </div>
     </div>
  </body>
</html>