<?php
$text = 'Eu vou estudar PHP';
$cont = str_word_count($text, 0);
print($cont);

echo '<br>';

$text = 'Eu vou estudar PHP';
$cont = str_word_count($text, 1);
print_r($cont);

echo '<br>';

$text = 'Eu vou estudar PHP';
$cont = str_word_count($text, 2);
print_r($cont);
?>