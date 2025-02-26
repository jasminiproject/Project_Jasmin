<?php include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <style>
        body {
            background-color: red;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        form {
            background: white;
            color: black;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h2>User Form</h2>
    <form>
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <input type="submit" id="button">
    </form>
</body>
</html>

<?php
   
$sname=$_GET['name'];
$sage=$_GET['age'];

//echo "$sname";
//echo "$sage";

$query = "INSERT INTO student VALUES ('$sname','$sage')";

$data=mysqli_query($conn,$query);

if($data)
{
    //echo "Data inserted into Database";
}
else
{
    echo "Failed to insert data into database";

}

?>
 