
<?php
//백준 2581 소수
while($line = trim(fgets(STDIN))) {
  $inputs[] = trim($line);
}
$inputs = array_filter($inputs);
sort($inputs);
$primeNumbers = getPrimeNumbers($inputs[0], $inputs[1]);
if (sizeof($primeNumbers) > 0) {
  print(array_sum($primeNumbers)."\n");
  print($primeNumbers[0]);
} else {
  print(-1);
}

/**
* 해당 범위에 있는 소수 구하기.
*
* @param int $from
* @param int $end
*/
function getPrimeNumbers(int $from, int $end): array
{
  $array = [];
  foreach(range($from, $end) as $number){
    if(isPrimeNumber($number)) {
        $array[] = $number;
    }
  }
  sort($array);
  return $array;
}

/**
* 해당 숫자가 소수인가.
*
* @param int $number
*/
function isPrimeNumber(int $number): bool
{
  if ($number < 2) {
    false;
  }
  if ($number == 2) {
    true;
  }

  foreach(range(2, ($number/2)) as $i) {
    if ($number % $i == 0) {
      return false;
    }
  }
  return true;
}
?>
