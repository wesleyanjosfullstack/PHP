<?php
$site = 'Curso em Vídeo';
$sub = substr($site, 0, 5);
echo $sub .'<br>';

$site = 'Curso em Vídeo';
$sub = mb_substr($site, 0, 5);
echo $sub .'<br>';

$site = 'Curso em Vídeo';
$sub = mb_substr($site, 7);
echo $sub .'<br>';

$site = 'Curso em Vídeo';
$sub = mb_substr($site, -5);
echo $sub .'<br>';

$site = 'Curso em Vídeo';
$sub = mb_substr($site, -5, 2);
echo $sub .'<br>';
?>