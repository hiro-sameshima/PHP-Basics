<?php
//Whileを使ったループ処理
//条件に関する処理を書き忘れると無限ループになる

$hp = 100;

while($hp > 0) {
  echo "Your HP: $hp" . PHP_EOL;//$hpが0になるまで、hoが15ずつ減っていく処理
  // $hp -= 15; 
}