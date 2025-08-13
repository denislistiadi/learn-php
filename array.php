<?php

// indeks
$fruits = ["apple", "orange", "banana"];
echo $fruits[1];

// associative
$person = [
  "name" => "denis listiadi",
  "age" => 25,
  "city" => "pemalang"
];
echo $person["name"];

// multidimensional
$people = [
  [
    "name",
    "denis listiadi"
  ],
  [
    "age",
    25
  ],
  [
    "city",
    "pemalang"
  ]
];
echo $people[0][1]; 
