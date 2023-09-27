<?php

$numbers = array(1, 2, 3, 4,5,6,7,8,9,10);
function is_odd($n) {
    return $n % 2 != 0;
}


$oddNumbers = array_filter($numbers, 'is_odd');
print_r($oddNumbers);

?>
