<!-- // WAP for Featch today date  -->
<?php

echo "Welcome to the Lecter 17 <br>";
// dS se date (DD ) pata chalta h 
// F se month (In English )
// Y se year pata chalta h 
// g:i se time pata chalta h 
// A se am pm pata chalta h
date_default_timezone_set("Asia/Kolkata"); 
$d = date("dS F Y ,g:i A");
echo "Today date is $d <br>";

?>