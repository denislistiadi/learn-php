<?php

$conn = mysqli_connect("localhost", "root", "", "learn_php");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create user
mysqli_query($conn, "INSERT INTO users (name, email) VALUES ('Denis Listiadi', 'denislistiadi@mail.com");

// Read users
$result = mysqli_query($conn, "SELECT * FROM users");
while ($row = mysqli_fetch_assoc($result)) {
  echo "Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
}

// Update user
mysqli_query($conn, "UPDATE users SET email = 'testedit@mail.com' WHERE name = 'Denis Listiadi'");

// Delete user
mysqli_query($conn, "DELETE FROM users WHERE name = 'Denis Listiadi'");