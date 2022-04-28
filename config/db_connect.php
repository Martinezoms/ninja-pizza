<?php
// Connect to database
$conn = mysqli_connect('localhost', 'DATABASE_USERNAME', 'DATABASE_PASSWORD', 'DATABASE_NAME');

// Check connection
if (!$conn) {
  echo 'connection error: ' . mysqli_connect_error();
}
