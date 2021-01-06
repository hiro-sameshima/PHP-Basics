<?php
//do Whileを使ったループ処理
//条件に関係なく一度は処理をする
$hp = -50;

do {
  echo "Your HP: $hp". PHP_EOL;
  $hp -= 15;
} while($hp > 0);