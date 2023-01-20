<?php 
      class Minion {
        var $Health;
        var $Strength;
        var $Defense;
        var $Speed;
        var $Luck;
        var $Dmg;

        function __construct($Health, $Strength, $Defense, $Speed, $Luck) {
          $this->Health = $Health;
          $this->Strength = $Strength;
          $this->Defense = $Defense;
          $this->Speed = $Speed;
          $this->Luck = $Luck;
          $this->Dmg = 0;
        }
      }
      ?>

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

function Damage($Tim, $Enemy, $turn) {

    if($turn == 1)
    {
        if(Banana_strike() == true)
        {
            $DMG = 2*$Tim->Strength - $Enemy->Defense;
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
        }
    }
    return $DMG;
 }

 $rounds = 0;
 while ( $Tim->Health > 0 && $Enemy->Health > 0 && $rounds < 20)
 {
    $turn = turnTim($Tim, $Enemy); 
    if($turn == 1)
    {
        $DMG = Damage($Tim,$Enemy,$turn);
        $Enemy->Health = $Enemy->Health - $DMG;
        $turn = !$turn;
    }
    elseif ($turn == 0)
    {
        $DMG = Damage($Tim,$Enemy,$turn);
        $Tim->Health = $Tim->Health - $DMG;
        $turn = !$turn;
    }
    $rounds++;
 }



  

?>