<?php
$letter = 'C';
$cod = ord($letter);
echo 'A letra '. $letter .' tem código '. $cod .'<br>';

$letter = 'c';
$cod = mb_ord($letter);
echo 'A letra '. $letter .' tem código '. $cod .'<br>';
?>