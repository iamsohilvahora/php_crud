<?php
 
$conn = new mysqli("localhost", "root", "", "mydata");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>