<?php
//백준 2609 최대공약수와 최소공배수
print_r(calculate('24 18'));

/**
* @param string $string 
*
* @return string
*/
function calculate(string $string)
{
  $array = explode(' ', $string);
  sort($array);
  $divisor = $array[0];
  $rest = $array[1] % $array[0];

  while($rest !== 0){
    $divisor = $rest;
    $rest = $divisor % $rest;
  }
  $greatest_common_divisor = $divisor;
  $lowest_common_multiple = $array[0] * $array[1] / $greatest_common_divisor;
  return $greatest_common_divisor.' '.$lowest_common_multiple;
}
?>
