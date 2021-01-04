<?php
//比較演算子と真偽値
/*
比較演算子

  >= ~以上
  <= ~以下
  > ~より大きい
  < ~より小さい
  === ~と等しい
  !== ~と等しくない

*/

$score = 80;

if ($score > 80) {
  echo ">=は以上だから、同じ数字も含まれるんやで".PHP_EOL;
}else{
  echo ">は〇〇より大きいだから、同じ数字は含まれないんやで".PHP_EOL;
}

//単一の値が評価される条件

//変数がこんなとき、falseが返ってしまう

  /*
    false
    ±0 , ±0.0
    '0'
    ''
    null
    []
  */

$x = 0;

if($x) {
  echo "上記以外だからtrueになるんやで";
} else {
  echo "falseやで";
}