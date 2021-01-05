<?php
//switchで条件分岐をする
//まずは普通のif文での条件分岐

$signal = 'red';

if($signal === 'red') {
  echo 'stop!' . PHP_EOL;
} elseif ($signal === 'yellow') {
  echo 'cation!' . PHP_EOL;
} elseif ($signal === 'blue') {
  echo 'go!' .PHP_EOL;
}