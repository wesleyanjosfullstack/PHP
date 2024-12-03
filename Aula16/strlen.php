<?php
$t = 'Curso em Vídeo';
$size = strlen($t);
echo 'O comprimento da frase é de '. $size .'<br>';

$text = 'Curso em Vídeo';
$s = mb_strlen($text);
echo 'O comprimento da frase é de '. $s .'<br>';
?>