<?php
$price = $_GET['p'];
echo 'O preço do produto é R$'.number_format($price, 2, ',', '.').'<br>';

$price += $price * 10 / 100;
echo 'E o novo preço com 10% de aumento será R$'.number_format($price, 2, ',', '.').'<br>';

$price = $_GET['p'];
$price -= $price * 10 / 100;
echo 'E o novo preço com 10% de desconto será R$'.number_format($price, 2, ',', '.').'<br>';
?>
