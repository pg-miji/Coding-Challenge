<?php
/**
 * How many times does the number 8 come from 1 to 10,000?
 * Instead of counting the number that contains 8, you should count all 8 numbers.
 * (8808 should be counted as 3, 8888 should be counted as 4)
 */
$count = 0;
for($i = 1; $i <= 10000; $i++){
   $count += mb_substr_count((String)$i, 8);
}
echo $count;
