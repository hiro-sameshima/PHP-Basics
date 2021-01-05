<?php
//switchを使いこなしている
//まずは普通のif文での条件分岐

$signal = 'blue';

//switchを使った条件分岐
//条件の追加はcaseを追記するだけ(&＆や||などの論理演算子のような表現)

switch ($signal) {
  case 'red';
    echo 'stop!' .PHP_EOL;
    break;
  case 'yellow';
    echo 'cation!' .PHP_EOL;
    break;
  case 'red'; //条件を追加しており、言語化すると「redまたはyellowのときtrue」
  case 'yellow';
    echo 'go!' .PHP_EOL;
  break;
  default:
    echo "故障のようだ".PHP_EOL;
    break;
}