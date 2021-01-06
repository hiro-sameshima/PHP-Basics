<?php
//Whileを使ったループ処理
//ある条件を満たされるまでループ処理を行う

$hp = 100;

while($hp > 0) {
  echo "Your HP: $hp" . PHP_EOL;//$hpが0になるまで、hoが15ずつ減っていく処理
  $hp -= 15;
}