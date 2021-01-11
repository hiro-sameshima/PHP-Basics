<?php
//引数の型を指定する

function showInfo(string $name , int $score):void {

  echo $name . ':' . $score . PHP_EOL;
}

// showInfo('tanaka',100);

//型付けは弱い。
showInfo('tanaka' , '4'); //文字列の4を渡した場合、PHPが数値の4に変換してしまう