<?php
//백준 2501 약수 구하기
print_r(findDivisors(2735,1));

/**
* @param int $n
* @param int $k
*
* @return int
*/
function findDivisors(int $n, int $k)
{
  if ($n > 10000 || $k > $n) {
    return 0;
  }

  $divisor_list = [];
  for($i=1; $i<=$k; $i++) {
    if ($n % $i === 0) {
        $divisor_list[] = $i;
    }
  }

  if (count($divisor_list) < ($k-1)) {
    return 0;
  }
  return $divisor_list[$k-1];
}

?>
