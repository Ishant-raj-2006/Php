<?php
echo "Welcome to Lecture 19";
 echo "<br>";
// Creating a 2D Dimensional array.
$MuntiArr = array(
            array(2,3,4,5),
            array(6,7,8,9),
            array(10,11,12,13)
);
for($i=0; $i<count($MuntiArr); $i++){
    echo var_dump($MuntiArr[$i]);
    echo "<br>";
   

}

for($j=0; $j<count($MuntiArr); $j++){
    for($k=0; $k<count($MuntiArr[$j]); $k++){
        echo $MuntiArr[$j][$k];
        echo " ";
    }
    echo "<br>";
}
?>
