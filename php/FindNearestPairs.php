<?php
/**
 * Given a one-dimensional point,
 * write a function that outputs the pair of the shortest distances.
 */
$numbers = [1, 3, 4, 8, 13, 17, 20];
$pairs = findNearestPairs($numbers);
var_dump($pairs);

/**
 * @param array $numbers
 * @return array
 */
function findNearestPairs($numbers)
{
    sort($numbers);

    $distance = [];
    for($i = 0; $i < count($numbers)-1; $i++){
        $distance[] = $numbers[$i+1] - $numbers[$i];
    }
    $keys = array_keys($distance, min($distance));
    foreach($keys as $key){
        $pairs[] = [$numbers[$key],$numbers[$key]+1];
    }

    return $pairs;
}
