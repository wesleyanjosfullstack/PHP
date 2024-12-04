<?php
$a = ['A', 'J', 'M', 'X', 'K'];
print_r($a);
echo '<br>';

sort($a);
print_r($a);
echo '<br>';

rsort($a);
print_r($a);
echo '<br>';

asort($a);
print_r($a);
echo '<br>';

arsort($a);
print_r($a);
echo '<br>';

$array = [
    2 => 'a',
    5 => 'j',
    0 => 'm',
    3 => 'x',
    4 => 'k',
];
print_r($array);
echo '<br>';

ksort($array);
print_r($array);
echo '<br>';

krsort($array);
print_r($array);
echo '<br>';
?>