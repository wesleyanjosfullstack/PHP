<?php
$name = 'Maria';
$array = str_split($name);
print_r($array);

echo '<br>';

$name = 'Wesley';
$array = mb_str_split($name);
print_r($array);
?>