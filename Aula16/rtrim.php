<?php
$name = '   José da Silva   ';
echo strlen($name) .'<br>';
$new = ltrim($name);
echo $new .'<br>';
echo strlen($new) .'<br>';

$name = '   Wesley dos Anjos   ';
echo mb_strlen($name) .'<br>';
$new = ltrim($name);
echo $new .'<br>';
echo mb_strlen($new) .'<br>';
?>