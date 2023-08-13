<?php
//get info on specific array, manipulating data, what to do to data in array

$fruits = ['apple','orange', 'pear'];

//get length
//echo count($fruits);

//search array
//var_dump(in_array('apples', $fruits));

//Add to array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'berry');
//array_unshift($fruits, 'banana');

//remove from array
array_pop($fruits); //from end
array_shift($fruits); //from beginning
//unset($fruits[2]); //specific, also removes indes

//split into 2parts
//$chunked_array = array_chunk($fruits, 2);
//print_r($chunked_array);
//print_r(($fruits)

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2]; //spread operator
//print_r($arr4);

//combined
$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);

//print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

//range
$numbers = range(1, 20); 
print_r($numbers);

//array_map
 $newNumbers = array_map(function($number) {
    return "Number ${number}";
 }, $numbers);
 //print_r($newNumbers);

//array_filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

print_r($lessThan10);

//reduce -add numbers
$sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number);
var_dump($sum);