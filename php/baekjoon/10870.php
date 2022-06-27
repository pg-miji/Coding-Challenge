<?php
// 백준 10870 피보나치 수 5
echo getFibonacci(10);

/**
* @param int $n
*
* @return int
*/
function getFibonacci(int $n)
{
  $number = 0;
  $series = [0, 1];

  for($i=2; $i<=$n; $i++){
    $number = $array[$i-1] + $array[$i-2];
    $series[] = $number;
  }
  return $number;
}
?>
