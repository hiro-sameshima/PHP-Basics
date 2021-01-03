<?php
//ifで条件分岐をする
//elseifを使って条件を追加する

$score = 70;

if ($score >= 80) {
  echo "good".PHP_EOL;
} elseif ($score >= 60) {
  echo "oh...".PHP_EOL;
} else {
  echo "oh my god".PHP_EOL;
}