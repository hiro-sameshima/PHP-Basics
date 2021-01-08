<?php
//returnを使って処理を返す
//３つの引数の合計を表示する関数を作成
//returnで返すと、それ以降の処理は行われない

function sum($a, $b, $c)
{
  return $a + $b  + $c .PHP_EOL;
  echo "こんにちは" . PHP_EOL;//returnで返っているため、それ以降の処理は行われない
}


echo sum(100,200,300,) + sum(400,500,600,)   .  PHP_EOL;