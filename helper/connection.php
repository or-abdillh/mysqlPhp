<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "db_mhs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 
else echo <<<EOT
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Connected!</strong> Success to connected MySQL.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
EOT;