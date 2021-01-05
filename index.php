<?php
//forを使ったループ処理をしよう

for ($i = 1; $i <= 5; $i++) {
  echo "$i  - 'hello'" .PHP_EOL;  //$iの今の値を表示させる際、$iも記述する
}

/*
1  - 'hello'
2  - 'hello'
3  - 'hello'
4  - 'hello'
5  - 'hello'
と表示される
*/