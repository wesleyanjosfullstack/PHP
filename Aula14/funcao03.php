<?php
function soma() {
    $p = func_get_args();
    $t = func_num_args();
    $s = 0;

    for ($c = 0; $c <= $t; $c++) {
        $s += $p[$c];
    }

    return $s;
}

$r = soma(3, 5, 2, 8, 9, 4);
echo 'A soma dos valores e '. $r .'<br>';
?>