<?php
//変数のスコープを理解する

function sum($a, $b, $c)
{
  return $a + $b  + $c .PHP_EOL;
  echo "こんにちは" . PHP_EOL;
}


echo sum(100,200,300,) + sum(400,500,600,)   .  PHP_EOL;