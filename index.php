<?php
$original  = "Hola Heroku, un saludo desde Mexico."; // Set original string
$parts = explode(" ", $original); // string into array
$reversed = array_reverse($parts); // reverse the array
$last = implode(" ", $reversed); // Last output, array to string to print it clear
echo '<br> Original string: '.$original; //Print original string
echo '<br><br> Modified string: '.$last; // Print modified string
?>