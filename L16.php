// WAP for find the total marks and find the average
<?php
// echo "Welcome to Lecture 16 Function <br>";
// function processMarks($marksArr){
//     $sum =0;
//     $ave =0;
//     foreach ($marksArr as $value){
//         $sum += $value;
//         $ave = ($sum)/5;
//     }
//     return $sum;
//     return $ave;
// } 
// $Ishant = [68,76,68,81,90]; 
// $sumMarks = processMarks($Ishant);
// echo "Total marks Scored BY Ishant Out of 500 is $sumMarks and it's yoyr average $ave";

echo "Welcome to Lecture 16 Function <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value){
        $sum += $value;
    }
    
    $ave = $sum / count($marksArr); // Count use karna behtar hai bajaye 5 likhne ke
    
    // Dono values ko ek array mein pack karke return karein
    return array($sum, $ave);
}

$Ishant = [68, 76, 68, 81, 90];

// List function se hum array ki values ko alag-alag variables mein nikaal sakte hain
list($totalSum, $average) = processMarks($Ishant);

echo "Total marks Scored By Ishant Out of 500 is $totalSum and its average is $average";
?>

