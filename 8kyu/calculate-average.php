<!-- Write a function which calculates the average of the numbers in a given list.

Note: Empty arrays should return 0.

https://www.codewars.com/kata/57a2013acf1fa5bfc4000921/train/php
 -->

 function find_average($array): float {
    if(empty($array)) return 0;
    return array_sum($array) / count($array);
}