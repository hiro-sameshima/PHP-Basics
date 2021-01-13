<?php
//foreachで配列を操作する

$scores = [
  'first'   =>  90,
  'second ' =>  80,
  'third'   =>  50,
];

foreach($scores as $score) {
  echo $score . PHP_EOL;
};

/*

90
80
50

*/