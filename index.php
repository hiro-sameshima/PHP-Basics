<?php
//switchを使いこなしている
//まずは普通のif文での条件分岐

$signal = 'blue';

//switchを使った条件分岐
//条件にそぐわなかった際の処理は、defaultを使って記述できる

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
 default://条件にそぐわなかった際の処理をdefaultで記述する。
    echo "故障のようだ".PHP_EOL;
    break;
}