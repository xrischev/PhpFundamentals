<?php
//$text = trim("This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)");
//$word = trim("is");

$text = trim(fgets(STDIN));
$word = trim(fgets(STDIN));
preg_match_all("/([^.?!]*\\b" . $word . "\\b[^.?!]*[.?!])/", $text, $res);
foreach ($res[0] as $item) {
    echo trim($item) . "\n";
}