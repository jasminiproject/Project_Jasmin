<?php
error_reporting(0);
// Connect to MySQL (XAMPP)
$conn = new mysqli("localhost", "root", "", "college_info");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$name = $_POST['name'];
$age = $_POST['age'];

// Insert into database
$sql = "INSERT INTO student (name, age) VALUES ('$name', '$age')";
if ($conn->query($sql) === TRUE) {
    echo "User data stored successfully!";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>