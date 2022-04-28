<?php
// Connect to database
$conn = mysqli_connect('localhost', 'zoms', 'angelina', 'ninja_pizza');

// Check connection
if (!$conn) {
  echo 'connection error: ' . mysqli_connect_error();
}
