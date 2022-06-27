<?php
//백준 3460 이진수
print_r(findBinaryNumeral(13));

/**
* @param int $n
*
* @return string
*/
function findBinaryNumeral(int $n)
{
  $binary_numeral = decbin($n);
  $array = str_split(strrev($binary_numeral),1);

  $position_list = [];
  for($i=0; $i < count($array); ++$i) {
    if ($array[$i] == 1) {
      $position_list[] = $i;
    }
  }
  return implode(' ', $position_list);
}
?>
