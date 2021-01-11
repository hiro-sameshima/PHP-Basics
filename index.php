<?php
//引数の型を指定する
//declare(strict_type)を使用した強い型付け

declare(strict_types = 1);//こちらを宣言することで厳密な型をチェックしてくれる

function showInfo(string $name , int $score):void {

  echo $name . ':' . $score . PHP_EOL;
}

// showInfo('tanaka',100);

showInfo('tanaka' , '4'); //文字列の4を渡した場合、PHPが数値の4に変換してしまう

/*
厳密な型付けを行ったことで、下記のような引数エラーが発生した

  atal error: Uncaught TypeError: Argument 2 passed to showInfo() must be of the type int, string given, called in /Users/sameshima/projects/php.training/PHP-Basics/index.php on line 14 and defined in /Users/sameshima/projects/php.training/PHP-Basics/index.php:7
Stack trace:
#0 /Users/sameshima/projects/php.training/PHP-Basics/index.php(14): showInfo('tanaka', '4')
#1 {main}
  thrown in /Users/sameshima/projects/php.training/PHP-Basics/index.php on line 7
*/