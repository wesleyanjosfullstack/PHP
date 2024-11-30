<?php
$v1 = $_GET['x'];
$v2 = $_GET['y'];
echo '<h2>Valores recebidos '. $v1 .' e '. $v2 .'</h2><br>';

echo 'O valor absoluto de '. $v2 .' é '. abs($v2) .'<br>'; //Valor Absoluto
echo 'O valor de '. $v1 .'<sup>'. $v2 .'</sup> é '. pow($v1, $v2) .'<br>'; //Valor Elevado
echo 'A raiz de '. $v1 .' é '. sqrt($v1) .'<br>'; //Raiz Quadrada
echo 'O valor de '. $v2 .' arredondado é '. round($v2) .'<br>'; //Round para arredondamento
echo 'O valor de '. $v2 .' arredondado para cima é '. ceil($v2) .'<br>'; //Ceil
echo 'O valor de '. $v2 .' arredondado para baixo é '. floor($v2) .'<br>'; //Floor
echo 'A parte inteira de '. $v2 .' é '. intval($v2) .'<br>'; //Parte inteira
echo 'O valor de '. $v1 .' em moeda é R$'. number_format($v1, 2, ',', '.') .'<br>'; //Formatar números
?>
