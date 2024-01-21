<?php

// My Variables:

$name = "Wilson"; // "Wilson" is a string.
$name = 'Wilson'; // Strings can use double, or single quotes.
$name = "Wilson's Evil Twin"; // The value a variable is assigned latest is the one it will use.

$body_temperature = 98; // 98 is an integer.
$body_temperature_new = 98.8; // 98.6 is a float.

echo $name; // Displays $name on the PHP page.
echo "<br>"; // Adds a break between the above and below variables being displayed on the PHP page.
echo $body_temperature;
echo "<br>";
echo $body_temperature_new; 
echo "<br>";
echo "My name is $name!"; // Displays "My name is Wilson's Evil Twin!"
echo "<br>";
echo 'My name is $name!'; // Displays "My name is $name!" Using single quotes here makes it take the variable name as a literal part of the string. 
echo "<br>";
echo 'My name is '.$name.'!'; // Displays "My name is Wilson's Evil Twin!" If you want/need to use single quotes, surrounding the variabla name with '..' will let it still be interpreted as a variable.
echo "<br>";
echo "The normal body temperature for a human being is $body_temperature_new."; // (My VSCode theme displays variables with their own color using either "" or ''..'')

$name = "Marieke";

echo "<br>";
echo $name; // The value a variable is assigned latest is the one it will use... But that variable has to be assigned ABOVE the code calling for it. PHP is linear.

// Basic math with variables:
$x = 20;
$y = 5;
$z = $x + $y;

echo "<br>";
echo $z;

$z = $x * $y;

echo "<br>";
echo $z;

$z = $x / $y;

echo "<br>";
echo $z;

// Now back to the names!
$first_name = "Wilson";
$last_name = "Stewart";

echo "<br>";
echo $first_name.' '.$last_name; // To echo two or more variables at once, we can join them by typing .''. or ."". in between them.
// To put a space in between the two variables, put a space in between the quotes. You can also put any text you want in there.

echo "<br>";
echo "My full name is $first_name $last_name.";
echo "<br>";
echo 'My full name is '.$first_name.' '.$last_name.'.';




