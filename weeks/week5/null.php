<?php

echo "<h2> First example of \"a\", it is false, not NULL: </h2>";

$a = 0;
echo "a is " . is_null($a) . "<br>";

echo "<h2> Second example of \"b\", echoing \"1\", what does that mean? 1 = \"true\", so \"b\" is NULL: </h2>";

$b = null;
echo "b is " . is_null($b) . "<br>";

echo "<h2> Third example of \"c\", it is false, not NULL: </h2>";

$c = "null";
echo "c is " . is_null($c) . "<br>";

echo "<h2> Fourth example of \"d\", it echoes \"1\", so it is NULL: </h2>";

$d = NULL;
echo "d is " . is_null($d) . "<br>";