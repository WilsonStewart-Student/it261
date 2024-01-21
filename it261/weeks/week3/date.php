<?php

// Date functiom and if statement.

echo date("Y");
echo "<br>";


echo date("l, F j, Y h:i A"); // Day of the week - month - day of the month - year - hour:minute - AM/PM 
echo "<br>";

date_default_timezone_set("America/Los_Angeles");
echo date("l, F j, Y h:i A");
echo "<br>";

$name = "Wilson";
$our_time = date("H:i A"); // 24-hour hour:minute - AM/PM
echo "<br>";
echo $our_time;

// If the hour is less than or equal to 11, then it is morning.
// If the time is less than or equal to 17, then it is afternoon.
// Any other time is counted as evening.

if($our_time <= 11)
{
    echo "<h2 style=\"color:goldenrod;\"> Good morning, $name! </h2>
    <img src=\"images/sun.png\" alt=\"Sun\" style=\"max-width:200px;\">
    <p> It's time to get up! </p>
    ";
}
elseif($our_time <= 17)
{
    echo "<h2 style=\"color:green;\">  Good afternoon, $name! </h2>";
}
else
{
    echo "<h2 style=\"color:darkblue;\">  Good evening, $name! </h2>";
}