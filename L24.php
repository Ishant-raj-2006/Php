<?php
echo "Hello welcome to Lecture 24 in PHP out of 82 <br>";
echo " We are ready to get connected to a Database  <br>";

/*
Ways to Connected to mysql Database
 1.mysqli extensions 
 2.pdo
 */

 // Connecting to the database
 $servername = "localhost";
 $username = "root";
 $password = "";

 // Creator connection object
 $conn =  mysqli_connect($servername , $username , $password );


 // Die if connexion was not successfully 
 if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
 }
 echo " Connexion was successful ";
?>