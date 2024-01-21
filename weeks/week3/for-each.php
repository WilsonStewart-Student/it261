<?php
// Our wine list... An array of wines!

echo "<h2> This will be my wine list: </h2>";

$wines = array // Indexed array.
(
    "Cabernet",
    "Merlot",
    "Syrah",
    "Malbec",
    "Red Blood" 
);

// Since arrays cannot simply be echoed, we will be using a for each loop.

echo "<ul>";
foreach($wines as $key)
{
    echo "<li> $key </li>";
}
echo "</ul>";

echo "<h2> Movies and shows list, which will have both a key and a value. </h2>";

$shows = array // Associative array.
(
    "Apple TV" => "Severance", 
    "Apple TV" => "For All Mankind",
    "Showtime" => "City on a Hill",
    "Showtime" => "Homeland",
    "Movie" => "Top Gun Maverick",
    "HBO Max" => "Hacks" 
);

// Below only can display one value per key, the value being the latest one in the array.
echo "<ul>";
foreach($shows as $key => $value) // $key and $value can technically be named anything but just calling them key and value helps us remember what they represent. :)
{
    echo "<li> <b>$key</b>: $value </li>";
}
echo "</ul>";

// // However, with this nested format, we can display multiple values per key.
// $shows = array 
// (
//     "Apple TV" => array("Severance", "For All Mankind"),
//     "Showtime" =>  array("City on a Hill", "Homeland"),
//     "Movie" => "Top Gun Maverick",
//     "HBO Max" => "Hacks" 
// );

// echo "<br>";

// echo "<ul>";
// foreach($shows as $key => $value)
// {
//     if (is_array($value))
//         foreach($value as $value)
//         {
//             echo "<li> <b>$key</b>: $value </li>";
//         }
//         else
//         {
//             echo "<li> <b>$key</b>: $value </li>";
//         }
// }
// echo "</ul>";

// echo "<br>";

// // And lastly for the formatting I like best, this foreach loop can be used. :D
// echo "<ul>";
// foreach($shows as $key => $value)
// {
//     echo "<li> <b>$key</b>:";
//     if (is_array($value))
//         foreach($value as $nestedvalue)
//         {
//             if ($nestedvalue != end($value))
//             {
//                 echo " $nestedvalue, ";
//             }
//             else
//             {
//                 echo $nestedvalue;
//             }
//         }
//         else
//         {
//             echo " $value";
//         }
//     echo "</li>";
// }
// echo "</ul>";


echo "<h2> Time for our navigation, that will again have both a key and a value. </h2>";

$nav = array
(
    "index.php" => "Home", 
    "about.php" => "About",
    "daily.php" => "Daily",
    "project.php" => "Project",
    "contact.php" => "Contact",
    "gallery.php" => "Gallery" 
);

echo "<ul>";
foreach($nav as $key => $value)
{
    echo "<li> <a href=\"$key\"> $value </a> </li>";
}
echo "</ul>";