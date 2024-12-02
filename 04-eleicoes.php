<?php
$year = $_GET['a'];
$y = date('Y');
$age = $y - $year;
echo 'Quem nasceu em '. $year .' tem idade de '. $age .' anos.<br>';
$type = $age >= 18 && $age < 65 ? 'Obrigatório !<br>' : 'Não obrigatório !<br>';
echo 'E dessa forma seu voto é '. $type .'<br>';
?>
