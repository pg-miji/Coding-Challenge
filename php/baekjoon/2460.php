<?php
//백준 2460 지능형 기차2
$array = [
  '0 32',
  '3 13',
  '28 25',
  '17 5',
  '21 20',
  '11 0',
  '12 12',
  '4 2',
  '0 8',
  '21 0'
];
echo getMaxPersons($array);

/**
* @param array $array
*
* @return int
*/
function getMaxPersons(array $array)
{
  $maxPersons = 0;
  $persons = 0;
  foreach($array as $station){
    $info = explode(' ', $station);
    $minus = $info[0];
    $plus = $info[1];
    $persons = $persons - $minus + $plus;
    if ($persons > $maxPersons) {
      $maxPersons = $persons;
    }
  }

  return $maxPersons;
}
?>
