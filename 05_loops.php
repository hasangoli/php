<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

for ($x = 0; $x <= 10; $x++) {
  echo "Number $x <br/>";
}


/* ------------ While Loop ------------ */

$y = 1;

while ($y <= 15) {
  echo "Number $y <br/>";
  $y++;
}


/* ---------- Do While Loop --------- */

/*
do...while loop will always execute the block of code once, even if the condition is false.
*/

$xz = 6;

do {
  echo "Number $xz <br/>";
  $xz++;
} while ($xz <= 5);


/* ---------- Foreach Loop ---------- */

$posts = ['First Post', 'Second Post', 'Third Post'];

for ($i = 0; $i < count($posts); $i++) {
  echo "$posts[$i] <br/>";
}