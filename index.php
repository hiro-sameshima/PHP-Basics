<?php
//変数のスコープを理解する

$rate = 1.1;//消費税の変数

function sum($a, $b, $c)
{
  global $rate; //関数の外で宣言したスコープを関数内で有効にするため、globalを用いる
  return ($a + $b  + $c) * $rate;//sum関数に対して、$rateを掛ける
}


echo sum(100,200,300,) + sum(400,500,600,)   .  PHP_EOL;