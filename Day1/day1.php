<?php

/*
Calculate the distance between numbers in 2 lists
Sample Lists:
3   4
4   3
2   5
1   3
3   9
3   3
*/

$firstList = [3, 4, 2, 1, 3, 3];
$secondList = [4, 3, 5, 3, 9, 3];

function calculate_distance($firstList, $secondList) {
    sort($firstList);
    sort($secondList);
    $distance = 0;
    for ($i = 0; $i < count($firstList); $i++) {
        $distance += abs($firstList[$i] - $secondList[$i]);
    }
    return $distance;
}

$distance = calculate_distance($firstList, $secondList);

echo "Distance: $distance\n";

