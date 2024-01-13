<?php

// Current currency conversion rates:
// 1 ruble = 0.011 USD
// 1 pound sterling = 1.27 USD
// 1 canadian dollar = 0.75 USD
// 1 euro = 1.10 USD
// 1 yen = 0.0069 USD

// We have:
// rubles = 10007
// pound sterling = 500
// canadian dollar = 5000
// euros = 1200
// yen = 2000

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
            <td> 10007 </td>
            <td> 110.08 </td>
        </tr>

        <tr>
            <th> Pound Sterling </th>
            <td> 500 </td>
            <td> 635.00 </td>
        </tr>

        <tr>
            <th> Canadian Dollars </th>
            <td> 5,000 </td>
            <td> 3,750.00 </td>
        </tr>

        <tr>
            <th> Euros </th>
            <td> 1,200 </td>
            <td> 1,320.00 </td>
        </tr>

        <tr>
            <th> Yen </th>
            <td> 2000 </td>
            <td> 13.80 </td>
        </tr>

    </table>

    </div> <!-- End "wrapper". -->

</body>

</html>