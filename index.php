<?php
//四則演算

echo 10 + 3 . PHP_EOL;  //13
echo 10 - 3 . PHP_EOL;  //7
echo 10 * 3 . PHP_EOL;  //30
echo 10 / 3 . PHP_EOL;  //3.3333333

echo 10 % 3 . PHP_EOL;  //1
echo 10 ** 3 . PHP_EOL;  //1000

//優先度の高い計算式

echo 2 + 10 * 3 .PHP_EOL; //32
echo (2 + 10) * 3 .PHP_EOL; //36


//数値らしいものは文字列であっても数値として扱おうとする(PHPでは)

echo 2 + "10" .PHP_EOL ; //12