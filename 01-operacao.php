<?php
$n1 = $_GET['a'];
$n2 = $_GET['b'];
$type = $_GET['op'];
echo 'Os valores passados foram '. $n1 .' e '. $n2 .'<br>';

$r = ($type == 'a') ? $n1 + $n2 : $n1 * $n2;
echo 'O resultado será '. $r . '<br>';
?>