<?php
$name = 'Wesley dos Anjos';
$new = str_pad($name, 30, ' ', STR_PAD_RIGHT);
print("Meu conhecido $new é bom !<br>");

$name2 = 'Wesley';
$new2 = str_pad($name2, 30, ' ', STR_PAD_BOTH);
print("Meu conhecido $new2 é bom !<br>");

$name3 = 'Wesley';
$new3 = str_pad($name2, 30, ' ', STR_PAD_LEFT);
print("Meu conhecido $new3 é bom !<br>");
?>