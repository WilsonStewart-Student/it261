<?php 

// Our functions page!

// Create function...
function sayHello()
{
    echo "Hello PHP function!";
}

// ...And call it!
sayHello();

echo "<h2> Arithmentic Problems - Cube </h2>";

// When creating a function that accepts an argument, the function has a variable to hold that argument.
function cube($num)
{
    $num_cubed = $num * $num * $num;
    echo $num_cubed;
}

// Then, when we call the function like this, $num becomes 5.
cube(5);

echo "<h2> Area - Width * Height </h2>";

// Functions can accept multiple arguments.
// Return means that when the function is run, the data being returned takes its place. 
function get_area($w, $l)
{
    $area = $w * $l;
    return $area;
}

$area = get_area(5, 12);
echo $area;

echo "<h2> Celcius Converter </h2>";

function celcius_converter($cel)
{
    $far = $cel * (9/5) + 32;
    echo $far;
}

celcius_converter(100);

echo "<h2> How do we deal with arrays? Using indexed arrays. </h2>";

function get_area_volume($w, $l, $h)
{
    $area = $w * $l;
    $volume = $w * $l * $h;
    return array($area, $volume);
}

$my_array = get_area_volume(10, 5, 20);

echo 
"
<b> This is my area:</b> ".$my_array[0]."
<br>
<b> This is my volume:</b> ".$my_array[1]."
<br>
";


echo "<h2> Now we will use the list function! </h2>";

function get_area_volume_2($w, $l, $h)
{
    $area = $w * $l;
    $volume = $w * $l * $h;
    return array($area, $volume);
}

list($area, $volume) = get_area_volume_2(5, 10, 30);

echo 
"
<b> This is my area:</b> ".$area."
<br>
<b> This is my volume:</b> ".$volume."
<br>
";

echo "<h2> Our Navigation Created with a Function! </h2>";

define("THIS_PAGE", basename($_SERVER ["PHP_SELF"]));

$nav = array
(
    "index.php" => "Home", 
    "about.php" => "About",
    "daily.php" => "Daily",
    "project.php" => "Project",
    "contact.php" => "Contact",
    "gallery.php" => "Gallery" 
);

function make_links($nav)
{
    $my_return = "";

    foreach($nav as $key => $value)
    {
        if (THIS_PAGE == $key)
        {
            $my_return .= "<li> <a style=\"text-shadow: #6b1fb1 0 0 10px;\" href=\"$key\"> $value </a> </li>";
        }
        else
        {
            $my_return .= "<li> <a href=\"$key\"> $value </a> </li>";
        }

    } // End foreach().

    return $my_return;

} // End links().

echo make_links($nav);

echo "<h2> The Implode Function! </h2>";

$cars = array
(
    "toyota",
    "ford",
    "subaru",
    "audi",
    "bmw",
    "mercedes",
    "lexus"
);

$my_cars = implode(", ", $cars);
echo $my_cars;

echo "<h2> The logic behind the wines on our form: </h2>
<p> If \$_POST[\$wines] is not empty, take \$_POST[\$wines], implode them, and put the imploded array into a new variable called \$my_wines. </p>";

?>
