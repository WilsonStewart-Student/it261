<?php

// We have:
// rubles = 10007
// pound sterling = 500
// canadian dollar = 5000
// euros = 1200
// yen = 2000

// Current currency conversion rates:
// 1 ruble = 0.011 USD
// 1 pound sterling = 1.27 USD
// 1 canadian dollar = 0.75 USD
// 1 euro = 1.10 USD
// 1 yen = 0.0069 USD

$ruble = 10007;
$pound_sterling = 500;
$canadian_dollar = 5000;
$euro = 1200;
$yen = 2000;

$ruble_rate = 0.011;
$pound_rate = 1.27;
$canadian_rate = 0.75;
$euro_rate = 1.10;
$yen_rate = 0.0069;

$ruble_converted = $ruble * $ruble_rate;
$pound_converted = $pound_sterling * $pound_rate;
$canadian_converted = $canadian_dollar * $canadian_rate;
$euro_converted = $euro * $euro_rate;
$yen_converted = $yen * $yen_rate;

$total = $ruble_converted + $pound_converted + $canadian_converted + $euro_converted + $yen_converted;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Currency Logic Exercise </title>

    <style> 

    * 
    {
        padding: 0;
        margin: 0; 

        box-sizing: border-box;
    }

    #wrapper 
    {
        width: 500px;
        margin: 30px auto;
    }

    table 
    {
        width: 500px;

        border: 1px solid orange;
        border-collapse: collapse;
    }

    th, td
    {
        padding: 8px;

        border: 1px solid orange;
    }

    h1, h2, h3
    {
        text-align: center;
    }

    </style>

</head>

<body>   

    <div id="wrapper">

    <h1> After our world-wind travels, we have returned home with the following currencies: </h1>

    <ul>
        <li> Rubles </li>
        <li> Pound Sterling </li>
        <li> Canadian Dollars </li>
        <li> Euros </li>
        <li> Yen </li>
    </ul>

    <h2> What ever shall we do? </h2>

    <table>

        <tr> 
        <th colspan="2"> Currency </th>
        <th> Dollars </th>
        </tr>

        <tr>
            <th> Rubles </th>
            <td> <?php echo $ruble ?> </td>
            <td> $<?php echo number_format($ruble_converted, 2) ?> </td>
        </tr>

        <tr>
            <th> Pound Sterling </th>
            <td> <?php echo $pound_sterling ?> </td>
            <td> $<?php echo number_format($pound_converted, 2) ?> </td>
        </tr>

        <tr>
            <th> Canadian Dollars </th>
            <td> <?php echo $canadian_dollar ?> </td>
            <td> $<?php echo number_format($canadian_converted, 2) ?> </td>
        </tr>

        <tr>
            <th> Euros </th>
            <td> <?php echo $euro ?> </td>
            <td> $<?php echo number_format($euro_converted, 2) ?> </td>
        </tr>

        <tr>
            <th> Yen </th>
            <td> <?php echo $yen ?> </td>
            <td> $<?php echo number_format($yen_converted, 2) ?> </td>
        </tr>

        <tr> 
        <th colspan="2"> Total in USD </th>
        <td> $<?php echo number_format($total, 2) ?> </td>
        </tr>

    </table>

    </div> <!-- End "wrapper". -->

</body>

</html>
