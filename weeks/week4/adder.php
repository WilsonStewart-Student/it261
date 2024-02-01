<!-- NOTE: Errors are documented line-by-line as the locations of some things were rearranged for visual similarity to the original as well as usability. -->

<html>
<head>
<title>My Adder Assignment</title>
<style> 
/* Added styles. :) */
* { padding: 0; margin: 0; box-sizing: border-box;} 
h1 { text-align: center; margin: 20px; color: green;}
h2 { text-align: center; margin: 20px;}
p { text-align: center; margin: 20px;}
form { padding: 5px; margin: 0 auto; width:300px; border: 1px solid red;}
</style>
</head>
<body>
<h1>Adder.php</h1> <form action="" method="post"> <!-- Removed "\" from the form tag, added form method="post" -->
<label> Enter the first number:</label> <input type="text" name="num1"><br> <!-- Changed "Num1" to "num1", added <label> tag to beginning -->
<label>Enter the second number:</label> <input type="text" name="num2"><br> <!-- Changed first </label> tag to <label>, then added </label> tag back after "Enter the second number:" text. -->
<input type="submit" value="Add Em!!"> </form> <!-- Added double quote after "Add Em!! -->

<?php // Moved PHP below the HTML    

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if (floatval($num1) && floatval($num2)) // Check if both number values are actually NUMBERS before calculating total.
{
 $myTotal = $num1 + $num2; // Changed "-=" to "=", changed "$Num2" to "$num2"

echo '<h2>You added '. $num1 .' and '.$num2.' </h2>'; // Changed quotes around .$num1. to single quotes, added single quotes around .$num2., removed extra single & double quotes at the end of the line, and added </h2> at the end.
echo ' <p style="color:red;"> and the answer is <br> 
'.$myTotal.'! </p>'; // Added single quote after </p> tag, changed " $myTotal ." to '.$myTotal.', removed extra double quote after the !, and moved style="color:red;" into the <p> tag above.
}
else // If they aren't numbers, display this message.
{
    echo "<p> Please only enter real numbers. </p>";
}
echo'<p><a href="">Reset page</a></p>'; //  Added semicolon to end of line, added </p> tag
} ?> <!-- Added PHP end tag -->
 


</body>
</html> <!-- Removed "';{?>" from end of line -->