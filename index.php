<?php
$name = 'taguchi';

// $text = <<<'EOT' // nowdoc
// $text = <<<"EOT" // heredoc
  $text = <<<'EOT'
  hello! $name
    this is looooong
  text!
  
  EOT;

echo $text;