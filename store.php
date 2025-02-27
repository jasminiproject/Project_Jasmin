<?php
error_reporting(0);

$conn = new mysqli("localhost", "root", "", "college_info");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$age = $_POST['age'];


$sql = "INSERT INTO student (name, age) VALUES ('$name', '$age')";
if ($conn->query($sql) === TRUE) {
    echo "User data stored successfully!";
} else {
    echo "Error: " . $conn->error;
}


$conn->close();
?>
