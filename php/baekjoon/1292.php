<?php
//백준 1292 쉽게 푸는 문제
$input = trim(fgets(STDIN));
echo getTotal($input);

/**
* @param string $string
*/
function getTotal(string $string): int
{
  $numbers = explode(' ', $string);
  sort($numbers);
  $start = $numbers[0];
  $end = $numbers[1];

  $array = str_split(substr(getSequence($end), $start, $end-$start));
  $sum = array_sum($array);
  return $sum;
}

function getSequence($end): string
{
  $sequence = '';
  for($n = 1; $n <= $end; $n++) {
    for($i = 1; $i < $n; $i++) {
      $sequence = $sequence.$n;
    }
  }
  return $sequence;
}
?>
