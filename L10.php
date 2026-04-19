<?php
$a = 9;
$b = 8;
if($a > $b){
    echo "$a is greater than $b";
}
else{
    echo "$a is less than $b";
}
echo "<br>";

$age = 19;
if($age>18){
    echo "You can drink water with tea and alchhol";
}
elseif($age > 13){
    echo "You can drink tea only with water. No alcohol for you";
}
else{
    echo "You can drink water only";
}

echo "<br>";
echo " Write a prevail to allow a driver to drive one day when his age is greater than 25 and less than 65";
echo "<br>";
echo "<br>";
$D_age = 37;
if($D_age <56){
    echo "Yes you can Drive ";
}
elseif($D_age>25){
    echo "you can't drive";
}
else{
    echo "Sorry";
}
?>