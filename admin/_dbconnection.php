<?php
$servername = "localhost";
$username = "sagorahmead";
$password = "sagor1122";
$dbname = "kohanit_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>