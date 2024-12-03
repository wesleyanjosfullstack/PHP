<?php
$txt = 'Estou aprendendo PHP no Curso em Vídeo de PHP';
$cont = substr_count($txt, 'PHP');
echo $txt .'<br>PHP foi encontrada '. $cont .' vezes.<br>';

$txt = 'Estou aprendendo PHP no Curso em Vídeo de PHP';
$cont = mb_substr_count($txt, 'PHP');
echo $txt .'<br>PHP foi encontrada '. $cont .' vezes.<br>';
?>