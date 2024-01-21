<?php

// If, else, and elseif statements.

$temp = 55;
if($temp <= 60)
    {
        echo "It is a semi-warm day!";
    }
    else 
    {
        echo "It may be getting warmer!";
    }

echo "<br>";

$new_temp = 81;
if($new_temp <= 60)
    {
        echo "Not a very warm day.";
    }
    elseif($new_temp <= 70)
    {
        echo "It's getting warmer!";
    }
    elseif($new_temp <= 80)
    {
        echo "We might be going to the beach!";
    }
    else
    {
        echo "We will <b>definitely</b> go to the beach!";
    }

echo "<h2> This exercise will be about a salary, a bonus, and sales. </h2>";

// A salary of $95,000 anually -- doesn't change.
// But if your sales are above $100,000, you get a bonus!
// Over $100,000 in sales = +5% salary.
// Over $120,000 in sales = +10% salary.
// Over $140,000 in sales = +15% salary.
// Over $150,000 in sales = +20% salary.

$salary = 95000;
$sales = 150000;

if ($sales <= 99999) // If sales are less than or equal to $99,999 you do not recieve a bonus.
    {
        echo "Sorry, you did not make your bonus.";
    }
    elseif ($sales <= 119999) // If sales are greater than $99,999 but less than or equal to $119,999, you recieve a 5% bonus.
    {
        $salary *= 1.05;
        echo "$".number_format($salary, 2)." dollars";
    }
    elseif ($sales <= 139999) // If sales are greater than $119,999 but less than or equal to $139,999, you recieve a 10% bonus.
    {
        $salary *= 1.10;
        echo "$".number_format($salary, 2)." dollars";
    }
    elseif ($sales <= 149999) // If sales are greater than $139,999 but less than or equal to $149,999, you recieve a 15% bonus.
    {
        $salary *= 1.15;
        echo "$".number_format($salary, 2)." dollars";
    }
    else // If sales are greater than $149,999, you recieve a 20% bonus.
    {
        $salary *= 1.20;
        echo "Awesome, you made 20% bonus! Your annual salary, including bonus, totals to $".number_format($salary, 2)." dollars";
    }



