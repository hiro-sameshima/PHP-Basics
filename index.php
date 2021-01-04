<?php
//論理演算子を使ってみる
/*
  $scoreが60点で、名前がtaguchiというデータを探す場合。
*/

$score = 60;
$name = 'tag';

if($score >= 50) {
  if($name === 'taguchi') {
    echo 'good job'.PHP_EOL;
  } else {
    echo 'bad'.PHP_EOL;
  }
} 

//論理演算子  なおかつ(&&)

if($score >= 50 && $name === 'tag') {
  echo "great".PHP_EOL;
}

//論理演算子 もしくは(||)

if($score >= 70 || $name === 'aaa') {
  echo "great!!!";
} else {
  echo "non";
}

//論理演算子　〜ではない(!)

if (!$x) {
  // $x の評価が true **ではない** 場合に実行される部分
}