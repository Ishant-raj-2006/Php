<?php
echo "Hello welcome to the Lecture 25 <br>";

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// ✅ Check connection FIRST
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection was successful <br>";

// ✅ Create database (safe way)
$sql = "CREATE DATABASE IF NOT EXISTS dbIshant";

// Run query
$result = mysqli_query($conn, $sql);

// ✅ Check result
if($result){
    echo "Database created successfully OR already exists";
}else{
    echo "Error creating database: " . mysqli_error($conn);
}
?>