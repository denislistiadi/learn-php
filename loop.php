<?php

// For loop
for ($i= 1; $i <= 5; $i++) {
  echo "Urutan for ke-$i \n";
}

// While loop
$i = 1;
while ($i <= 5) {
  echo "Urutan while loop ke-$i \n";
  $i++;
}

// Do-while loop
$i = 1;
do {
  echo "Urutan do-while loop ke-$i \n";
  $i++;
} while ($i <= 5);

// Foreach loop for arrays
$fruits = ["apple", "orange", "banana"];
foreach ($fruits as $fruit) {
  echo "Buah: $fruit \n";
}