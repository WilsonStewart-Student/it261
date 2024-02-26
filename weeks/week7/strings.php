<?php 

// Our str_replace() and substr() functions!
// substr(string, start, length)

$statement = "Presently, I am reading the Looming Tower";

// Echo the statement as normal:
echo $statement;

echo "<br>";
// Echo the statement starting with the 0th indexed character, it will look the same:
echo substr($statement, 0);

echo "<br>";
// Echo the statement starting with the 1st indexed character, it will now begin with "r":
echo substr($statement, 1);

echo "<br>";
// Echo the statement starting with the 10th indexed character, it will now begin with "I", ignoring the space that technically takes up
// the tenth spot in $statement. Using 11 as our start will also make it start with "I":
echo substr($statement, 10);

echo "<br>";
echo "<h2> Now I would like to display just the words \"I am reading\". </h2>";
// This is where we start using the "length" argument, which starts at 1 and not 0.
// Length is how many characters from the start we would like to cut our string again.
// Also, like "start", length will ignore spaces not between words:
echo substr($statement, 11, 12);

echo "<br>";
echo "<h2> What if I would like to display \"Looming\"? </h2>";
// If we want to get a part of a string closer to the end, we can use negative numbers.
// The length still behaves the same way:
echo substr($statement, -13, 7);

echo "<br>";
echo substr($statement, 4, 11);

echo "<br>";
echo substr($statement, -20, 2);

echo "<h2> Now for the string replace function! </h2>";

$statement_2 = "Hulu's rendition of the Looming Tower is based on the book named the Looming Tower!  ";

// Echo $statement_2, but with all instances of "the" (case sensitive) replaced with "The".
echo str_replace("the", "The", $statement_2);