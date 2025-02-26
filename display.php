<?php
    include("connection.php");
    error_reporting(0);

// Query to fetch data
$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query); // Corrected mysqli_query() usage

if (!$data) {
    die("Query failed: " . mysqli_error($conn)); // Error handling
}

$total = mysqli_num_rows($data);

if ($total > 0) {
    while ($result = mysqli_fetch_assoc($data)) { // Fetch multiple rows
        echo "Name: " . $result['name'] . "| Age: " . $result['age'] . "<br>";
    }
} else {
    echo "No records found";
}
?>