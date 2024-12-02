<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$m = ($n1 + $n2) / 2;
echo 'A média entre '. $n1 .' e '. $n2 .' é '. number_format($m, 1) .'<br>';
echo 'A situação do aluno é '. ($m < 6 ? 'Reprovado<br>' : 'Aprovado<br>'); 
?>
