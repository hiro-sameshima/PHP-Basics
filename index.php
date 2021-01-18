<?php
//
function getStats(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total , $total / count($numbers)];//count()とは、配列の要素数を求める
}

print_r(getStats(1,2,3,4,5));

list($sum, $average) = getStats(1,2,3);
[$sum, $average] = getStats(1,2,3);//listを使わない記述

echo $sum . PHP_EOL;
echo $average . PHP_EOL;

/*
Array
(
    [0] => 15 値の合計
    [1] => 3　値の平均
)


*/