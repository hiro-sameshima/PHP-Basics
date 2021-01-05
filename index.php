<?php
//switchを使いこなしている
//まずは普通のif文での条件分岐

$signal = 'red';

//switchを使った条件分岐

switch ($signal) {
  case 'red';
    echo 'stop!' .PHP_EOL;
    break;
  case 'yellow';
    echo 'cation!' .PHP_EOL;
    break;
  case 'blue';
    echo 'go!' .PHP_EOL;
  break;
  default:
    echo "故障のようだ".PHP_EOL;
    break;
}