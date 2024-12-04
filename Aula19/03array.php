<?php
    $a = ['A', 'J', 'M', 'X', 'K'];
    print_r($a);
    echo '<br>';
    
    array_unshift($a, 'O');
    print_r($a);
    echo '<br>';
    array_shift($a);
    print_r($a);
    echo '<br>';
?>