<?php
// Creating connection test is our database name
$conn = new mysqli('localhost', 'root', '','ebook');
// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
