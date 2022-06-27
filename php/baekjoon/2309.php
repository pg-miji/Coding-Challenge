<?php
//백준 2309 일곱 난쟁이
$array = [
  20,
  7,
  23,
  19,
  10,
  15,
  25,
  8,
  13
];
print_r(findDwarfs($array));

/**
* @param array $array
*
* @return array
*/
function findDwarfs(array $array)
{
  $total = array_sum($array);
  $over = $total - 100;
  $not_dwarf_list = [];
  for($position = 0; $position < count($array); $position++) {
    for($second_position = 0; $second_position < count($array); $second_position++){
      if ($position == $second_position) {
        continue;
      }
      if ($array[$position] + $array[$second_position] == $over) {
        $not_dwarf_list[] = [$position, $second_position];
      }
    }
  }
  $real_dwarf_list = [];
  foreach($not_dwarf_list as $case) {
    $copy = $array;
    unset($copy[$case[0]], $copy[$case[1]]);
    sort($copy);
    $real_dwarf_list[] = implode(' ', $copy);
  }
  return array_unique($real_dwarf_list);
}
?>
