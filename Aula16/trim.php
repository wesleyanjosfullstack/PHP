<?php
$name = '   José da Silva   ';
echo strlen($name);
$new = trim($name);
echo '<br>'. $new;
echo '<br>'. strlen($new) .'<br>';

$name = '   Wesley dos Anjos   ';
echo mb_strlen($name);
$trim = trim($name);
echo '<br>'. $trim;
echo '<br>'. mb_strlen($trim) .'<br>';
?>