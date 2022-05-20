<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'sann');
define('DB_PASS', 'sann');
define('DB_NAME', 'php_dev');

// Create Conn
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check conn
if ($conn->connect_error) {
  die('Connection Failed ' . $conn->connect_error);
}