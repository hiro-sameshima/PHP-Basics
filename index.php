<?php
//型を変更する

$a =  'hello';
$b =  10;
$c =  1.3;
$d =  null;
$e = true;

//変数の型を調べる

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);

$a = (float)10;//float(10)
$b = (string)1.3;//string(3) "1.3"


var_dump($a);
var_dump($b);

/*
var_dump()で表示される型
string(5) "hello"
int(10)
float(1.3)
NULL
bool(true)
NULL
*/