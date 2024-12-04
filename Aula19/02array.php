<?php
    $a = ['A', 'J', 'M', 'X', 'K'];
    print_r($a);
    echo '<br>';
    $a[] = 'O';
    print_r($a);
    echo '<br>';

    array_push($a, 'U');
    print_r($a);
    echo '<br>';
    array_pop($a);
    print_r($a);
?>