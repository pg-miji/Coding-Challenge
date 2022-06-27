<?php
//백준 10802 369게임
print_r(getNumberOfClaps(12345,123456789));

/**
 * @param int $a
 * @param int $b
 *
 * @return string
 */
function getNumberOfClaps(int $a, int $b)
{
  $clap_count = 0;
  while($a <= $b){
    if ($a % 3 == 0
      || str_contains((string)$a, 3)
      || str_contains((string)$a, 6)
      || str_contains((string)$a, 9)
    ) {
      $clap_count++;
    }
    $a++;
  }

  return $clap_count % 20150523;
}
