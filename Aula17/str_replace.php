<?php
$txt = 'Gosto de estudar matemática !!!';
$newTxt = str_replace('matemática', 'PHP', $txt);
echo $newTxt .'<br>';

$txt = 'Gosto de estudar Matemática !!!';
$newTxt = str_ireplace('matemática', 'PHP', $txt);
echo $newTxt .'<br>';

$txt = 'Gosto de estudar Matemática, matemática é muito legal !!!';
$newTxt = str_ireplace('matemática', 'PHP', $txt);
echo $newTxt .'<br>';
?>