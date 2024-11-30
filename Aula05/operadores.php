<?php
// http://localhost:8000/operadores.php?a=5&b=8
$n1 = $_GET['a'];
$n2 = $_GET['b'];
echo 'Valores recebidos: '. $n1 . ' e ' . $n2 .'<br>';
$m = ($n1 + $n2) / 2;

echo 'A soma vale '. ($n1 + $n2) .'<br>';
echo 'A subtração vale '. ($n1 - $n2) .'<br>';
echo 'A multiplicação vale '. ($n1 * $n2) .'<br>';
echo 'A divisão vale '. ($n1 / $n2) .'<br>';
echo 'A modulo vale '. ($n1 % $n2) .'<br>';
echo 'A média vale '. $m .'<br>';
?>
