<?php
//配列のキーを指定しよう

//キーで配列の値を取得する(配列キーの指定)
$scores = [
  'first'   =>  90,
  'second ' =>  80,
  'third'   =>  50,
];


var_dump($scores);
print_r($scores);

/*

array(3) {
  ["first"]=>
  int(90)
  ["second "]=>
  int(80)
  ["third"]=>
  int(50)


  Array
(
    [first] => 90
    [second ] => 80
    [third] => 50
)

*/