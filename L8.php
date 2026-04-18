<!-- WAP For find the length of string  -->
<?php
echo $name ="Ishant Raj";
echo "<br>";
// This is use for find the length of any string 

echo "The length of my name is " . strlen($name);


echo "<br>";


// This is use for find the how many words in any String that menas is not count space 
echo str_word_count($name) ;

echo "<br>";

// If we need to reversh any Word

echo strrev($name);

echo "<br>";

// If we need to find any thing in any string , and give is's starting index number 
echo strpos($name, "t");

echo "<br>";

// If  we need to replace any word to another word the we use 

echo str_replace("Ishant", "Srivastav" , $name);

echo "<br>";

//  if we need to repeat any word the we use 
echo str_repeat($name ,10);

echo "<br>";

// if we need to print some spaces in any strings that means we use (<pre>  </pre>)  function 
echo rtrim("<pre>     This is a good boy    </pre>");
echo "<br>";

// if we need to remove the extra space in Right side then we use rtrim
echo "<pre>";
echo rtrim("     This is a good boy    ");
echo "<br>";
echo ltrim("     This is a good boy    ");
echo "</pre> ";

echo "<br>";

?>