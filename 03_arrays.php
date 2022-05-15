<?php
/* ----------- Arrays ----------- */
// Simple Array
$numbers = [1, 2, 3, 4];
$fruits = array('apple', 'orange', 'pear');

print_r($numbers);
var_dump($numbers);
echo $fruits[1];

// Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

echo $hex['blue'];

$person = [
  'first_name' => 'Hasan',
  'last_name' => 'Goli',
  'email' => 'mrhasangoli@gmail.com'
];

echo $person['first_name'];

$people = [
  [
    'first_name' => 'Hasan',
    'last_name' => 'Goli',
    'email' => 'mrhasangoli@gmail.com'
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'johndoe@gmail.com'
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'janedoe@gmail.com'
  ]
];

echo $people[0]['first_name'];
var_dump(json_encode($people));

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/