<?php
$numbers = [-2,1,2,3,4,5,6,7,8,9];
$min = $numbers[0];
$index = 0;

for ($i = 1; $i < count($numbers);$i++){
    if ($numbers[$i] < $min){
        $min = $numbers[$i];
        $index = $i;
    }
}
echo $index;
