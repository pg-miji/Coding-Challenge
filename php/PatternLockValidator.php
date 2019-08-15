<?php
/**
 * Pattern locks cannot be passed twice, but only between numbers.
 * Let's write a source that can determine if some numbers can be pattern locks.
 */
$inputs = [
    [1,2,3,6,9],
    [1,2,5,6,4],
    [3,8,4,1,7],
    [2,8,4,6],
    [1,2,3,2,9]
];
foreach ($inputs as $input) {
    echo isValid($input) ? 'true' : 'false';
    echo PHP_EOL;
}

/**
 * @param array $input
 * @return bool
 */
function isValid(array $input)
{
    if(count($input) < 4 || count($input) > 9){
        return false;
    }
    if(min($input) < 1 || max($input) > 9){
        return false;
    }
    if($input !== array_values(array_unique($input))){
        return false;
    }

    $usableNumbers = range(1, 9);
    for($i = 0; $i < count($input)-1; $i++){
        $start = $input[$i];
        $end = $input[$i+1];

        if(!in_array($start, $usableNumbers) || !in_array($end, $usableNumbers)){
            return false;
        }

        $sum = $end + $start;
        if(($start % 2 !== 0 || $sum === 10) && $sum % 2 === 0 && in_array($sum/2, $usableNumbers)){
            return false;
        }

        unset($usableNumbers[array_search($start, $usableNumbers)]);
    }
    return true;
}
