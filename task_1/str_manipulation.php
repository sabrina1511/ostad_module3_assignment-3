<?php

$text ="The quick brown fox jumps over the lazy dog.";

function modified_text($text){
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);
    echo $text;
}
modified_text($text);

?>