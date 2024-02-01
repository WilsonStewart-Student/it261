<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> Currency1 PHP Form! </title>
</head>

<body> 

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>

        <label> Name </label>
        <input type="text" name="name">

        <label> Email </label>
        <input type="email" name="email">

        <label> How much money do you have? </label>
        <input type="number" name="amount">

        <label> Choose your currency. </label>
        <!-- For this, we use a "radio button" that has an additional attribute of "value". -->
        <ul>
            <li>
            <input type="radio" name="currency" value="0.011"> Rubles <!-- This gives us 1 radio button with the name appearing as "Rubles" and the value 
            being the exchange value of rubles to U.S. dollars. -->
            </li>
            <li>
            <input type="radio" name="currency" value="1.27"> Pounds
            </li>
            <li>
            <input type="radio" name="currency" value="0.75"> Canadian Dollars
            </li>
            <li>
            <input type="radio" name="currency" value="1.10"> Euros
            </li>
            <li>
            <input type="radio" name="currency" value="0.0069"> Yen
            </li>
        </ul>

        <input type="submit" value="Convert it!">

        <p> <a href=""> Reset form? </a> </p>

    </fieldset>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            if (empty($_POST["name"] 
            && $_POST["email"]
            && $_POST["amount"]
            && $_POST["currency"])) // If any fields are empty:
            {
                echo "<p class=\"error\"> Please fill out all of the fields! </p>";
            }
            elseif (isset($_POST["name"], 
            $_POST["email"],
            $_POST["amount"],
            $_POST["currency"])) // If all fields are filled:
            {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $amount = $_POST["amount"];
                $currency = $_POST["currency"];

                $dollars = $amount * $currency; // The amount of dollars we have is the amount of foreign currency ($amount) multiplied by the conversion
                // rate ($currency).

                echo 
                "<div class=\"box\">
                <h2> Hello $name! </h2>
                <p> You now have <b>\$".number_format($dollars, 2)."</b> American dollars and we will be emailing you at <b>$email</b> with your information. </p>
                
                </div>";
            }

        } // End $_SERVER request.
    ?>

</body>

</html>