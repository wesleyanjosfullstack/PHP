<?php
    $a = [1, 5, 3];

    print_r($a);
    
    echo '<br>';
    
    var_dump($a);

    echo '<br>';

    echo '<p>O array tem <b>'. count($a) .'</b> elementos</p>';
    foreach ($a as $v) echo $v .' ';
?>