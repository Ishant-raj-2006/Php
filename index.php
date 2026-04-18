<?php
echo "Hello Ishant Raj <br>";
/* PHP data Types
1. String
2.integer
3.Float
4.Bollean 
6.Object
4.Array
7.NULL
*/
// String -Sequence of Characters
$name = "Ishant";
$Friend = "Raj";
echo "$name is friend of $Friend<br>";
// Interger - non decimal number 
$income = 50000;
$debit = 5;
$total = $income-$debit;
echo "this is My total Expance  = $total";

// Float
$fo = 10.5;
$o = 0.33;
$diff = $fo-$o;
echo "<br>This is difference of $fo and $o is $diff";


// Boolean - can be either true or false
echo "<br>";
$num = false;
$num1 = true;
echo var_dump($num);
echo var_dump($num1);

// Object 
// Employee is a class --> Ishant can be one object 

// Array - used to store Multipale Values in a single variable
echo "<br>";
$Friend = array("Ishant", "Raj", "Badal", "Kumar");
echo var_dump($Friend);
echo "<br>";
echo $Friend[0];
echo "<br>";
echo $Friend[1];
echo "<br>";
echo $Friend[2];
echo "<br>";
echo $Friend[3];
echo "<br>";

?>