<?php
//백준 10818 최소, 최대
print_r(getMinimax(5, '20 10 35 30 7'));

/**
* @param int $total
* @param string $string
*
* @return string
*/
function getMinimax(int $total, string $string)
{
  $array = explode(' ', $string);
  sort($array);
  return $array[0].' '.$array[$total-1];
}
