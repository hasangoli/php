<?php
/* --------- Array Functions -------- */

$fruits = ['apple', 'orange', 'pear'];

// Get length
echo count($fruits);

// Search array
var_dump(in_array('apples', $fruits));

// Add to array
$fruits[] = 'grape';
array_push($fruits, 'banana', 'strawberry');
array_unshift($fruits, 'mango');

// Remove from array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

// Split itno chunks
$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);
print_r($fruits);

// Merge arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
print_r($arr3);
print_r($arr4);

// Combine arrays
$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);
print_r($c);

$keys = array_keys($c);
print_r($keys);

// Flip an array
$flipped = array_flip($c);
print_r($flipped);

$numbers = range(1, 20);
print_r($numbers);

$new_numbers = array_map(function ($number) {
  return "Number $number";
}, $numbers);
print_r($new_numbers);

$less_than_10 = array_filter($numbers, fn ($number) => $number <= 10);
print_r($less_than_10);

$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);