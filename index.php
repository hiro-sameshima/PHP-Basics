<?php

/*
長いテキストをまとめて記述する
  -大なり記号<<<'終端記号'改行 終端記号 ;で表示する
  -必ず改行を入れること。*コメントであっても書いてはいけない
  -終端記号は何でも良い(今回はEnd Of Textという意味でEOTとしている)
  -変数を埋め込むなら終端記号を""で囲むか、もしくは囲まない
*/
$name = sameshima;

$text = <<<'EOT'
  Hello!! $same
      Oh My Got...
EOT;

echo $text

?>