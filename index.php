<?php
//foreachで配列を操作する
//キーもforeachで取得する

$scores = [
  'first'   =>  90,
  'second ' =>  80,
  'third'   =>  50,
];

foreach($scores as $key => $score) {
  echo $key . ' - ' . $score . PHP_EOL;
};

/*

first - 90
second  - 80
third - 50

*/