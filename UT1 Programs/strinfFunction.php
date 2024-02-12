<?php
$str = "Hello World";
echo "Total words: ".str_word_count($str)."<br>";
echo "Length of String: ".strlen($str)."<br>";
echo "Reversed String: ".strrev("Hello World")."<br>";
echo "The Position of Hello is at: ".strpos("Hello World","Hello")."<br>";
echo "Replace String: ".str_replace("World", "PHP", "Hello World")."<br>";
?>