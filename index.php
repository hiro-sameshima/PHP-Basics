<?php
//配列の中で配列を展開する
//

$moreScores = [
  99,
  77
];

$scores = [
  90,
  80,
  $moreScores,
  50,
];

print_r($scores);

/*

Array
(
    [0] => 90
    [1] => 80
    [2] => Array
        (
            [0] => 99
            [1] => 77
        )

    [3] => 50
)

*/