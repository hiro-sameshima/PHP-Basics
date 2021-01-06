<?php
//continue,breakを使った式
// 特定の処理をスキップする

//continueを使い、3の倍数だけスキップする
for ($i = 1; $i <= 10; $i++) {
  if($i % 3 === 0) {
  continue;
  }
  echo $i .PHP_EOL;
}
