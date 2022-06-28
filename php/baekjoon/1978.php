<?php
//백준 1978 소수 찾기
echo countPrimeNumber('1 3 5 7');

/**
* @param string $string
*/
function countPrimeNumber(string $string) :int
{
  $array = explode(' ', $string);
  $prime_number_count = 0;
  foreach($array as $number) {
    if ($number == 1) {
      continue;
    }
    $is_prime_number = true;
    for($i=2; $i<$number; $i++) {
      if ($number % $i == 0) {
          $is_prime_number = false;
          break;
      }
    }
    if ($is_prime_number) {
      $prime_number_count++;
    }
  }
  return $prime_number_count;
}
?>
