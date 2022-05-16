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

$z = 6;

do {
  echo "Number $z <br/>";
  $z++;
} while ($z <= 5);


/* ---------- Foreach Loop ---------- */

$posts = ['First Post', 'Second Post', 'Third Post'];

for ($i = 0; $i < count($posts); $i++) {
  echo "$posts[$i] <br/>";
}

foreach ($posts as $index => $post) {
  echo $index + 1 . ' - ' . $post . '<br/>';
}

$person = [
  'first_name' => 'Hasan', 'last_name' => 'Goli', 'email' => 'hasan@gmaill.com'
];

foreach ($person as $key => $value) {
  echo "$key - $value <br/>";
};