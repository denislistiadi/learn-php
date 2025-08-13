<?php

$is_logged = true;

if ($is_logged) {
  echo "You are logged in";
} else {
  echo "Please log in";
}

$grade = 85;

if ($grade < 65) {
  echo "You failed";
} elseif ($grade <= 75) {
  echo "You passed";
} else {
  echo "You excelled";
}