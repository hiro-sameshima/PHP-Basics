<?php
//continue,breakを使った式
// 特定の処理をスキップする

//continueを使い、4の数字だけスキップする
for ($i = 1; $i <= 10; $i++) {
  if($i === 4) {
    continue;
  }
  echo $i .PHP_EOL;
}
