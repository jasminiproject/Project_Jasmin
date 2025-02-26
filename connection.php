<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_info";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection OK";
}
else{
    echo "Not connected".mysqli_connect_error();
}

?>