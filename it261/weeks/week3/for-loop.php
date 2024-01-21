<?php

// Demonstating for loops & placing them into HTML.

// Celcius v. Fahrenheit table:
// Starting with Celcius -- then converting.
// $far = ($cel * 9) / 5 + 32

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Celcius Table </title>

    <style> 
    * 
    {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    h1, h2
    {
        color: green;

        margin: 10px auto;

        text-align: center;
    }

    table 
    {
        width: 500px;
        margin: 20px auto;
        
        border-collapse: collapse;
        border: 1px solid lightblue;
    }
    td
    {
        padding: 5px;

        border-collapse: collapse;
        border: 1px solid lightblue;
    }
    </style>

</head>

<body>

    <h1> My Celcius / Fahrenheit Table! </h1>

    <table>
        <tr>
            <th> Celcius </th>
            <th> Fahrenheit </th>
        </tr>

        <?php
            for($cel = 0; $cel <= 100; $cel += 5)
            {
                $far = ($cel * 9) / 5 + 32;

                echo "<tr>";

                echo "<td> $cel </td>";
                echo "<td> $far </td>";

                echo "</tr>";
            }
        ?>

    </table>

    <h2> My Kilometer / Mile Table! </h2>

    <!-- 
    Kilometers v. Miles table:
    Starting with Kilometers -- then converting.
    $mi = $km * 0.621371
    -->
    
    <table>
        <tr>
            <th> Kilometers </th>
            <th> Miles </th>
        </tr>

        <?php
            for($km = 0; $km <= 100; $km += 5)
            {
                $mi = $km * 0.621371;

                echo "<tr>";

                echo "<td> $km </td>";
                echo "<td> ".number_format($mi, 2)." </td>";

                echo "</tr>";
            }
        ?>

    </table>

    
</body>

</html>

