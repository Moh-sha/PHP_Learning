<?php

function process($numbers)
{
    $sum = 0;
    foreach($numbers as $value)
    {
        $sum = $value+$sum;
    }
    return $sum;
}

$shafin = [1, 2, 3,4 ,5];
$print= process($shafin);

echo "value is $print";