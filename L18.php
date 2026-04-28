 <!-- Associative array -->
<?php
echo "Welcome to Lecture 18 <br>";
$arr = array("This" , "Is ", "Ishant" , "Raj");
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
echo $arr[3];
echo "<br>";

// Associative array 
$favcol = array("Ishant" => "White", 
                "Raj" => "Yellow");
echo $favcol["Ishant"];
echo "<br>";

echo $favcol["Raj"];
echo "<br>";
foreach($favcol as $key => $value){
    echo "<br> favorite Color of $key is $value";
}
?>