<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "college_info");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if search form is submitted
if (isset($_POST['search'])) {
    $name = $_POST['search_name'];

    // Fetch age from the database
    $sql = "SELECT age FROM student WHERE name='$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Age of " . $name . " is: " . $row['age'];
    } else {
        echo "No record found for " . $name;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Age</title>
</head>
<body>
    <h2>Search Age by Name</h2>
    <form method="post">
        Name: <input type="text" name="search_name" required><br>
        <input type="submit" name="search" value="Search">
    </form>
</body>
</html>