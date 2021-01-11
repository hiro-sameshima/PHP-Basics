<?php
//引数の型を指定する

function showInfo(string $name , int $score):void {

  echo $name . ':' . $score . PHP_EOL;
}

// showInfo('tanaka',100);

//誤って関係ない文字列を渡してしまった場合
showInfo('tanaka' , 'doitnow'); //普通にtanaka:doitnowを表示される