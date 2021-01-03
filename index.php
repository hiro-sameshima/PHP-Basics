<?php
//定数を使う

//定数は再代入できない

define('NAME', 'aaa');
define('NAME', 'bbb'); //aaa

echo NAME.PHP_EOL;

const HOGE = 'rrr';
const HOGE = 'fff';
echo HOGE . PHP_EOL; //rrr

?>