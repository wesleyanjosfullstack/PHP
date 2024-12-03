<?php
$t = 'Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionanamento da função wordwrap !';
$r = wordwrap($t, 5, "<br>\n", true);
echo $r;
?>