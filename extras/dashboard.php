<?php
session_start();

if (isset($_SESSION['username'])) {
  echo "<a href='./logout.php'>Logout</a>";
  echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
} else {
  echo "<h1>Welcome Guest</h1>";
}