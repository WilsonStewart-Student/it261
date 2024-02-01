<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/calculator.css" type="text/css" rel="stylesheet">
    <title> My Travel Calculator </title>
</head>

<body>

    <h1> My Travel Calculator! </h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label> Name: </label>
            <input type="text" name="name" value="<?php if (isset($_POST["name"])) {echo htmlspecialchars($_POST["name"]);} ?>"> 

            <label> How many total miles you plan on driving: </label>
            <input type="number" name="miles_to_drive" min="1" value="<?php if (isset($_POST["miles_to_drive"])) {echo htmlspecialchars($_POST["miles_to_drive"]);} ?>"> 

            <label> Your typical driving speed (in MPH): </label>
            <input type="number" name="driving_speed" min="1" value="<?php if (isset($_POST["driving_speed"])) {echo htmlspecialchars($_POST["driving_speed"]);} ?>"> 

            <label> How many hours in a day you plan on driving: </label>
            <input type="number" name="driving_hours" min="1" value="<?php if (isset($_POST["driving_hours"])) {echo htmlspecialchars($_POST["driving_hours"]);} ?>">

            <label> Price of gas: </label>
            <ul>
                <li>
                <input type="radio" name="gas_price" value="3.00" <?php if (isset($_POST["gas_price"]) && $_POST["gas_price"] == 3.00) {echo "checked=\"checked\"";} ?>> $3.00
                </li>
                <li>
                <input type="radio" name="gas_price" value="3.50" <?php if (isset($_POST["gas_price"]) && $_POST["gas_price"] == 3.50) {echo "checked=\"checked\"";} ?>> $3.50
                </li>
                <li>
                <input type="radio" name="gas_price" value="4.00" <?php if (isset($_POST["gas_price"]) && $_POST["gas_price"] == 4.00) {echo "checked=\"checked\"";} ?>> $4.00
                </li>
            </ul>

            <label> Your vehicle's fuel efficiency: </label>
            <select name="mpg"> 
            <option value="" <?php if (isset($_POST["mpg"]) && is_null($_POST["mpg"])) {echo "selected=\"unselected\"";} ?>> Select one. </option>
                <option value="10" <?php if (isset($_POST["mpg"]) && $_POST["mpg"] == "10") {echo "selected=\"selected\"";} ?>> Terrible @ 10mpg </option>
                <option value="20" <?php if (isset($_POST["mpg"]) && $_POST["mpg"] == "20") {echo "selected=\"selected\"";} ?>> Okay @ 20mpg </option>
                <option value="30" <?php if (isset($_POST["mpg"]) && $_POST["mpg"] == "30") {echo "selected=\"selected\"";} ?>> Good @ 30mpg </option>
                <option value="40" <?php if (isset($_POST["mpg"]) && $_POST["mpg"] == "40") {echo "selected=\"selected\"";} ?>> Great @ 40mpg </option>
            </select>

            <input type="submit" value="Calculate!">

            <p> <a href=""> Reset form? </a> </p>
        </fieldset>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // If you're missing a part of the form, display a specific error message.
        if (empty($_POST["name"])) 
        {
            echo "<p class=\"error\"> Please enter your name! </p>";
        }
        if (empty($_POST["miles_to_drive"]))
        {
            echo "<p class=\"error\"> Please enter how many miles you plan on driving! </p>";
        }
        if (empty($_POST["driving_speed"]))
        {
            echo "<p class=\"error\"> Please enter your typical driving speed! </p>";
        }
        if (empty($_POST["driving_hours"]))
        {
            echo "<p class=\"error\"> Please enter how many hours in a day you plan on driving! </p>";
        }
        if (empty($_POST["gas_price"]))
        {
            echo "<p class=\"error\"> Please enter gas price! </p>";
        }
        if ($_POST["mpg"] == NULL)
        {
            echo "<p class=\"error\"> Please select your vehicle's fuel efficiency level! </p>";
        }

        // Otherwise, if all parts of the form are set:
        if (isset($_POST["name"], 
        $_POST["miles_to_drive"],
        $_POST["driving_speed"],
        $_POST["driving_hours"],
        $_POST["gas_price"],
        $_POST["mpg"]))
        {
            // Set up all of these variables:
            $name = $_POST["name"];
            $miles_to_drive = floatval($_POST["miles_to_drive"]);
            $driving_speed = floatval($_POST["driving_speed"]);
            $driving_hours = floatval($_POST["driving_hours"]);
            $gas_price = floatval($_POST["gas_price"]);
            $mpg = floatval($_POST["mpg"]);

            if(!empty($name && $miles_to_drive && $driving_speed && $driving_hours && $gas_price) && $mpg != NULL)
            {
            // Then use them in our calculation! Need to make sure none of them are empty too, to avoid a dividing by 0 error...

            // We need to calculate: 
            // The total amount of hours spent driving,
            // The total amount of days we will spend traveling, (Not always actively driving.)
            // The total amount of gallons of gas we will need,
            // and the price of that gas. 

            // Total hours:
            // To get the total amount of hours spent driving, divide the total miles we need to drive
            // by our typical driving speed in MPH.
            $total_hours = $miles_to_drive / $driving_speed;

            // Total days:
            // To get the total amount of days we will spend driving, divide the total hours we will drive
            // by the amount of hours we plan to spend driving each day.
            // Also, when displayed, use ceil() to round up to the nearest whole day.
            $total_days = $total_hours / $driving_hours;

            // Total gas gallons:
            // To get the total number of gas gallons we will need, divide the total miles we need to drive
            // by our MPG rate.
            // Won't be ceiling'd under the assumption you will have access to gas stations and don't need to buy your own individual gallons.
            $total_gas = $miles_to_drive / $mpg;

            // Total gas price:
            // To get our total gas price, multiply our total gas gallons by the selected gas price.
            $total_gas_price = $total_gas * $gas_price;

                echo 
                "<div class=\"box\">
                <p> Hello $name. You will be driving a total of ".number_format($total_hours, 2)." hours, taking ".ceil($total_days)." day(s).
                You will need to use ".number_format($total_gas, 2)." gallons of gas, costing you $".number_format($total_gas_price, 2)." dollars. </p>
                </div>";
            }

        }
        
    }

    ?>

</body>

</html>