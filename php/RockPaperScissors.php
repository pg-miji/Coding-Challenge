<?php
//가위바위보의 승자 구하기
$string = trim(fgets(STDIN));
echo countWinners($string);

/**
* @param string $string
*/
function countWinners(string $string): int
{
  $array = explode(' ', $string);
  $result = array_count_values($array);
  if (count($result) == 0
    || count($result) == 3
    || in_array(count($array), $result))
  {
    return 0;
  }

  if (isset($result[1]) && isset($result[2])) {
    return $result[2];
  } elseif (isset($result[1]) && isset($result[3])) {
    return $result[1];
  } elseif (isset($result[2]) && isset($result[3])) {
    return $result[3];
  }
  return 0;
}
?>
