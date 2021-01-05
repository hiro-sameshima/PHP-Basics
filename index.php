<?php
//switchを使いこなしている
//まずは普通のif文での条件分岐

$signal = 'blue';

//switchを使った条件分岐
//breakを書き忘れると最後まで処理が進んでしまう

switch ($signal) {
  case 'red';
    echo 'stop!' .PHP_EOL;
    break;
  case 'yellow';
    echo 'cation!' .PHP_EOL;
    break;
  case 'red';
  case 'yellow';
    echo 'go!' .PHP_EOL;
  break;
 default:
    echo "故障のようだ".PHP_EOL;
    break;
}