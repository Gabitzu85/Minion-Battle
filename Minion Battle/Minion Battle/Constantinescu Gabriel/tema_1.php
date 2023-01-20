<?php
$Health_1 = rand(50, 100);
$Strength_1 = rand(70, 80);
$Defense_1 = rand(45, 55);
$Speed_1 = rand(40, 50);
$Luck_1 = rand(10, 30);
$Damage_1 = 0;

$Health_2 = rand(60, 90);
$Strength_2 = rand(60, 90);
$Defense_2 = rand(40, 60);
$Speed_2 = rand(40, 60);
$Luck_2 = rand(25, 40);
$Damage_2 = 0;
echo "<br>"; ?>
<!DOCTYPE html>
<html>

<body>
  <h1 style="font-size:80px; color:yellow; margin: 20px; text-align:center">Minion Battle</h1>
</body>

</html>
<?php
echo "<div style =\"text-align:center\">";
echo "<br>";
echo "Minion health = $Health_1";
echo "<br>";
echo "Minion strength = $Strength_1";
echo "<br>";
echo "Minion defense = $Defense_1";
echo "<br>";
echo "Minion Speed = $Speed_1";
echo "<br>";
echo "Minion Luck = $Luck_1";
echo "<br>";
echo "<br>";
echo "<br>";
echo "TIM health = $Health_2";
echo "<br>";
echo "TIM strength = $Strength_2";
echo "<br>";
echo "TIM defense = $Defense_2";
echo "<br>";
echo "TIM Speed = $Speed_2";
echo "<br>";
echo "TIM Luck = $Luck_2";
echo "<br>";
echo "<br>";
function damage(int $Damage, int &$Health, int $Strength, int $Defense)
{
  $Damage = $Strength - $Defense;
  echo  $Damage;
  $Health = $Health - $Damage;
}

function Minion_Attack($Damage_2, &$Health_2, $Strength_1, $Defense_2)
{
  echo "Minion attacks, Tim's damage is : ";
  echo damage($Damage_2, $Health_2, $Strength_1, $Defense_2);
  echo "<br>";
  echo "Tim's health becomes: $Health_2";
  echo "<br>";
}
function TIM_Attack($Damage_1, &$Health_1, $Strength_2, $Defense_1)
{
  echo "Tim attacks, Minion's damage is: ";
  echo damage($Damage_1, $Health_1, $Strength_2, $Defense_1);
  echo "<br>";
  echo "Minions's health becomes: $Health_1";
  echo "<br>";
}

$i = 2;
echo "<br>"; ?>
<!DOCTYPE html>
<html>

<body>
  <h1 style="font-size:50px; color:yellow; margin: 20px; text-align:center">The Game Begins!</h1>
</body>

</html>
<?php

echo "<br>";
echo "<br>";
echo "Attack 1: \r\n";
if ($Speed_1 > $Speed_2) 
{

  echo "Minion attacks first";
  echo "<br>";
  echo "\r\n";
  echo Minion_Attack($Damage_2, $Health_2, $Strength_1, $Defense_2);

  while (($i < 20)) {
    if (($Health_1 < 0) || ($Health_2 < 0)) {
      if ($Health_1 > $Health_2)
        echo "Minion won";
      else echo "TIM won";
      break;
    } else {

      echo "Attack $i: \r\n";
      echo TIM_Attack($Damage_1, $Health_1, $Strength_2, $Defense_1);
      if (($Health_1 < 0) || ($Health_2 < 0)) {
        if ($Health_1 > $Health_2)
          echo "Minion won";
        else echo "TIM won";
        break;
      }
      $i++;

      echo "<br>";
      echo "Attack $i: \r\n";
      echo Minion_Attack($Damage_2, $Health_2, $Strength_1, $Defense_2);
      $i++;
    }
  }
  
} elseif ($Speed_1 == $Speed_2) {
  if ($Luck_1 > $Luck_2) {
    echo "Minion attacks first";
    echo "<br>";
    echo "\r\n";
    echo Minion_Attack($Damage_2, $Health_2, $Strength_1, $Defense_2);
    while (($i < 20)) {
      if (($Health_1 < 0) || ($Health_2 < 0)) {
        if ($Health_1 > $Health_2)
          echo "Minion won";
        else echo "TIM won";
        break;
      } else {

        echo "Attack $i: \r\n";
        echo TIM_Attack($Damage_1, $Health_1, $Strength_2, $Defense_1);
        if (($Health_1 < 0) || ($Health_2 < 0)) {
          if ($Health_1 > $Health_2)
            echo "Minion won";
          else echo "TIM won";
          break;
        }
        $i++;

        echo "<br>";
        echo "Attack $i: \r\n";
        echo Minion_Attack($Damage_2, $Health_2, $Strength_1, $Defense_2);

        $i++;
      }
    }
    echo "\r\n";
  } else {
    echo "\r\n";
    echo "Tim attacks first";
    echo "<br>";
    echo "\r\n";
    echo TIM_Attack($Damage_1, $Health_1, $Strength_2, $Defense_1);
    while ($i < 20) {
      if (($Health_1 < 0) || ($Health_2 < 0)) {
        if ($Health_1 > $Health_2)
          echo "Minion won";
        else echo "TIM won";

        break;
      } else {
        echo "Attack $i: \r\n";
        echo Minion_Attack($Damage_2, $Health_2, $Strength_1, $Defense_2);
        if (($Health_1 < 0) || ($Health_2 < 0)) {
          if ($Health_1 > $Health_2)
            echo "Minion won";
          else echo "TIM won";
          break;
        }
        $i++;
        echo "<br>";
        echo "Attack $i: \r\n";
        echo TIM_Attack($Damage_1, $Health_1, $Strength_2, $Defense_1);
        $i++;
      }
    }
  }
} else {
  echo "\r\n";
  echo "Tim attacks first";
  echo "<br>";
  echo "\r\n";

  echo TIM_Attack($Damage_1, $Health_1, $Strength_2, $Defense_1);
  while ($i < 20) {
    if (($Health_1 < 0) || ($Health_2 < 0)) {
      if ($Health_1 > $Health_2)
        echo "Minion won";
      else echo "TIM won";
      break;
    } else {
      echo "Attack $i: \r\n";
      echo Minion_Attack($Damage_2, $Health_2, $Strength_1, $Defense_2);
      if (($Health_1 < 0) || ($Health_2 < 0)) {
        if ($Health_1 > $Health_2)
          echo "Minion won";
        else echo "TIM won";
        break;
      }
      echo "\r\n";
      $i++;
      echo "Attack $i: \r\n";
      echo "\r\n";
      echo TIM_Attack($Damage_1, $Health_1, $Strength_2, $Defense_1);
      echo "\r\n";
      $i++;
    }
  }
}

?>
<!DOCTYPE html>
<html>

<body>
  <h1 style="font-size:50px; color:yellow; margin: 10px;;text-align:center">Game over!</h1>
  <div class="row">
    <div class="column"></div>
    <div class="column"></div>
  </div>
</body>

</html>