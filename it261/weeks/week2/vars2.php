<?php

// My Variables... 2:

$name = "Wilson";
$first_name = "Wilson";
$last_name = "Stewart";

echo "<br>";

$name = "Wilson";
$name .= " Stewart"; // The .= here joins "Wilson" and "Stewart" as opposed to ovewriting "Wilson" with " Stewart". 
echo $name;

echo "<br>";

$color = "blue";
echo $color;

echo "<br>";
echo 'Wilson\'s favorite color is '.$color.'.'; // To use a single quote in a string using single quotes, you must put a backslash (\) before it. Same with double quotes on double quotes.  

$x = 20;
$y = 5;
$z = $x + $y; // Adds $x and $y and assigns their combined value to $z.
echo "<br>";
echo $z;

$x += 5; // Adds 5 to $x and sets $x's value to that new number. Uses 1/3 of the variables the last equation required!
echo "<br>";
echo $x;

$x = 100;
$x *= 10; // Multiplies $x by 10 and sets $x's value to that new number.
echo "<br>";
echo $x;

// Division.
$x = 100;
$x /= 10;
echo "<br>";
echo $x;

// Subtraction.
$x = 100;
$x -= 10;
echo "<br>";
echo $x;

echo "<br>";
echo "<h3> Our product, quantity, and tax exercise: </h3>";
$product = 120; // The price of a product.
$quantity = 5; // The amount of the product we are going to buy.
$total = $product * $quantity; // The total price we pay for the amount of products we bought.
$total *= 1.097; // NOT SO FAST!!! The total price we pay with WA state taxes.
echo "<br>";
echo $total;

echo "<br>";
echo "<h3> We would like our amount to reflect two decimal places. We are thinking about floats -- and a new function: number_format() </h3>";
$product = 120; // The price of a product.
$quantity = 5; // The amount of the product we are going to buy.
$total = $product * $quantity; // The total price we pay for the amount of products we bought.
$total *= 1.097; // NOT SO FAST!!! The total price we pay with WA state taxes.

$total_formatted = number_format($total, 2); // number_format(float variable, number of desired digits after the decimal.)
echo "<br>";
echo "We have a total of <b>$$total_formatted</b>.";

$product = 120; // The price of a product.
$quantity = 5; // The amount of the product we are going to buy.
$total = $product * $quantity; // The total price we pay for the amount of products we bought.
$total *= 1.105; // NOT SO FAST!!! The total price we pay with WA state taxes.

$total_formatted = number_format($total, 2); // number_format(float variable, number of desired digits after the decimal.)
echo "<br>";
echo "If tax was 10.5%, we would have a total of <b>$$total_formatted</b>.";

echo "<br>";
echo "We can also use the number_format function inside the echo, without using a new variable: <b>$".number_format($total, 2)."</b>";

echo "<br>";
echo "<h3> Our second preset function is our date function. </h3>";

echo date("Y"); // "Y" arg makes it return the current year.

echo "<br>";
echo date("l"); // "l" arg makes it return the current day. (Of the week.)

// date() has a crazy amount of preset inputs, so you can look at them all here: https://www.w3schools.com/php/func_date_date.asp.
// Also, below is the main example provided on that page.
echo "<br>";
echo date("l jS \of F Y h:i:s A"); // The time this provides is incorrect for the PST time zone.

echo "<br>";
date_default_timezone_set("America/Los_Angeles");
echo date("l jS \of F Y h:i:s A"); // The time this provides is now correct for the PST time zone.

echo "<h3> Time for an array! </h3>";
echo "<h4> Below is an indexed array. </h4>";

$fruit[] = "bananas"; // Putting square brackets after a variable name indicates it will be an array. // 0
$fruit[] = "cherries"; // 1
$fruit[] = "melon"; // 2
$fruit[] = "kiwi"; // 3
$fruit[] = "oranges"; // 4
$fruit[] = "apples"; // 5

echo $fruit[0]; // You cannot echo an entire array at once just by entering in the variable name, but you can echo a single part of it like this.

// Another way to write a new array is this way:
$fruit = array
(
    "bananas",
    "cherries",
    "melon",
    "kiwi",
    "oranges",
    "apples"
);

// Or this way:

$fruit =
[
    "bananas",
    "cherries",
    "melon",
    "kiwi",
    "oranges",
    "apples"
];

echo "<br>";
// While we can't echo a whole array at once, we can use this to display an array's data on a page in one line:
print_r($fruit);

echo "<br>";
// We can also do this:
var_dump($fruit);

echo "<h3> Now we have an associative array! </h3>";

$nav = array
(
    "index.php" => "Home", // "index.php" is the key, "Home" is the value.
    "about.php" => "About",
    "daily.php" => "Daily",
    "project.php" => "Project",
    "contact.php" => "Contact",
    "gallery.php" => "Gallery",
);

echo "<pre>";
var_dump($nav);
echo "</pre>";
