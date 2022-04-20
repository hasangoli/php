<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
*/

function register_user($email)
{
  echo "$email registered!";
}

register_user('Sann');

function sum($n1 = 2, $n2 = 2)
{
  return $n1 + $n2;
}

$number = sum();
echo $number;

$subract = function ($n1, $n2) {
  return $n1 - $n2;
};

echo $subract(10, 4);

$multiply = fn ($n1, $n2) => $n1 * $n2;
echo $multiply(9, 9);