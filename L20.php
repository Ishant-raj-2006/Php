<?php 
echo "Welcome to Lecture 20 <br>";
$a = 98;
$b = 9;
function printV(){
    global $a,$b ; // Give me the acces to this global variable
    $a = 1000; 
    $b = 100;
    echo "<br> The value of your variavle a is $a and b is $b";
}
echo $a;
printV();
echo "<br> The value of your variable a is $a and b is $b";
?>