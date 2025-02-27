<?php
    include("connection.php");
    error_reporting(0);


$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query); 
if (!$data) {
    die("Query failed: " . mysqli_error($conn)); 
}

$total = mysqli_num_rows($data);

if ($total > 0) {
    while ($result = mysqli_fetch_assoc($data)) { 
        echo "Name: " . $result['name'] . "| Age: " . $result['age'] . "<br>";
    }
} else {
    echo "No records found";
}
?>
