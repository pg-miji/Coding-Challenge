<?php
//백준 2693 N번째 큰 수
$array = [
  '1 2 3 4 5 6 7 8 9 1000',
  '338 304 619 95 343 496 489 116 98 127',
  '931 240 986 894 826 640 965 833 136 138',
  '940 955 364 188 133 254 501 122 768 408'
];
var_dump(getNthNumber($array));

/**
* @param array $array 
*
* @return array
*/
function getNthNumber(array $array)
{
  $numberth = 3;
  $answers = [];
  foreach($array as $case) {
    $numbers = explode(' ', $case);
    sort($numbers);
    $answers[] = $numbers[count($numbers)-$numberth];
  }
  return $answers;
}
?>
