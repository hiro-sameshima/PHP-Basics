<?php
//関数で処理をまとめてみよう
//引数を使う
//関数の値を、変えたい場合、引数として渡してあげる

function showAd($message) {

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
echo showAd('えええ');
echo 'Bob is great!!' .PHP_EOL;