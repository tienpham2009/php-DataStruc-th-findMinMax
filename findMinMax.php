<?php
$nums = [-2, 0, 5, 7, 9, -5, 30, 100];


foreach ($nums as $num) {
    echo $num . " ";
}
$maxValue = findMax($nums);
echo "</br>";
echo "The maximum value is: " . $maxValue;

$minValue = findMin($nums);
echo "</br>";
echo "The mininum value is: " . $minValue;



function findMin($array)
{
    $min = $array[0];

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min ){
            $min = $array[$i];
        }
    }
    return $min;
}

function findMax($array)
{
    $max = $array[0];

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max ){
            $max = $array[$i];
        }
    }
    return $max;
}


