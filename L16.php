// WAP for find the total marks 
<?php
echo "Welcome to Lecture 16 Function <br>";
function processMarks($marksArr){
    $sum =0;
    foreach ($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}
$Ishant = [68,76,68,81,90];
$sumMarks = processMarks($Ishant);
echo "Total marks Scored BY Ishant Out of 600 is $sumMarks";
?>