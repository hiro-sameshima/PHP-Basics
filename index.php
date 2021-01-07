<?php
//関数で処理をまとめてみよう
//引数を使う
//引数を渡さなかった時のデフォルト値を設定できる

function showAd($message = 'Ad') {//〇〇 = 'Ad'とすることでデフォルト値を設定できる

  echo '----------------'.PHP_EOL;
  echo '-------'.$message.'------'.PHP_EOL;
  echo '----------------'.PHP_EOL;

}


echo showAd('あああ');
echo 'Tom is great!!' .PHP_EOL;
echo showAd('いいい');
echo 'Bob is great!!' .PHP_EOL;
echo showAd('ううう');
echo 'Steve is great!!' .PHP_EOL;
echo showAd();// 引数を渡さなかった
echo 'Bob is great!!'
 .PHP_EOL;