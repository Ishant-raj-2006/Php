<?php 
echo "Welcome to lecture 27 PHP <br>";

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbIshant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection was successful <br>";
}

// Correct SQL query
$sql = "INSERT INTO `my_table` (`name`, `age`, `gender`) 
VALUES ('Srivastav', '28', 'M')";

$result = mysqli_query($conn, $sql);

// Check result
if($result){
    echo "The record has been inserted successfully <br>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>