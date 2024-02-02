<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> Currency4 </title>
    <!-- In this form, if the user fails to fill out all of the fields, the information they DID fill out won't disappear when the form is reloaded. -->
</head>

<body> 

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"> <!-- htmlspecialchars converts special characters to HTML entities. -->
    <!-- This helps prevent XSS, or "Cross Site Scripting". More about that can be found here: https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/! -->
    <fieldset> 

        <label> Name </label>
        <input type="text" name="name" value="<?php if (isset($_POST["name"])) { echo htmlspecialchars($_POST["name"]); } ?>"> <!-- Now when submitting reloads the page, the value stays what it was set by the user. -->

        <label> Email </label>
        <input type="email" name="email" value="<?php if (isset($_POST["email"])) { echo htmlspecialchars($_POST["email"]); } ?>">

        <label> How much money do you have? </label>
        <input type="number" name="amount" value="<?php if (isset($_POST["amount"])) { echo htmlspecialchars($_POST["amount"]); } ?>">

        <label> Choose your currency. </label>
        <!-- For this, we use a "radio button" that has an additional attribute of "value". -->
        <ul>
            <li>
            <input type="radio" name="currency" value="0.011" <?php if (isset($_POST["currency"]) && $_POST["currency"] == 0.011) { echo "checked=\"checked\""; } ?>> Rubles <!-- This gives us 1 radio button with the name appearing as "Rubles" and the value 
            being the exchange value of rubles to U.S. dollars. -->
            <!-- "checked="checked"" is fairly self explanatory. -->
            </li>
            <li>
            <input type="radio" name="currency" value="1.27" <?php if (isset($_POST["currency"]) && $_POST["currency"] == 1.27) { echo "checked=\"checked\""; } ?>> Pounds
            </li>
            <li>
            <input type="radio" name="currency" value="0.75" <?php if (isset($_POST["currency"]) && $_POST["currency"] == 0.75) { echo "checked=\"checked\""; } ?> > Canadian Dollars
            </li>
            <li>
            <input type="radio" name="currency" value="1.10" <?php if (isset($_POST["currency"]) && $_POST["currency"] == 1.10) { echo "checked=\"checked\""; } ?>> Euros
            </li>
            <li>
            <input type="radio" name="currency" value="0.0069" <?php if (isset($_POST["currency"]) && $_POST["currency"] == 0.0069) { echo "checked=\"checked\""; } ?>> Yen
            </li>
        </ul>

        <label> Choose your banking institution. </label>
        <select name="bank"> 
            <option value="" <?php if (isset($_POST["bank"]) && is_null($_POST["bank"])) { echo "selected=\"unselected\""; } ?>> Select one! </option>
            <!-- Above could also use is_null($_POST["bank"]) instead of $_POST["bank"] == "". -->
            <option value="Bank of America" <?php if (isset($_POST["bank"]) && $_POST["bank"] == "Bank of America") { echo "selected=\"selected\""; } ?>> Bank of America </option>
            <option value="Chase Bank" <?php if (isset($_POST["bank"]) && $_POST["bank"] == "Chase Bank") { echo "selected=\"selected\""; } ?>> Chase Bank </option>
            <option value="Banner Bank" <?php if (isset($_POST["bank"]) && $_POST["bank"] == "Banner Bank") { echo "selected=\"selected\""; } ?>> Banner Bank </option>
            <option value="Wells Fargo" <?php if (isset($_POST["bank"]) && $_POST["bank"] == "Wells Fargo") { echo "selected=\"selected\""; } ?>> Wells Fargo </option>
            <option value="BECU" <?php if (isset($_POST["bank"]) && $_POST["bank"] == "BECU") { echo "selected=\"selected\""; } ?>> Boeing Employees' Credit Union </option>
        </select>

        <input type="submit" value="Convert it!">

        <p> <a href=""> Reset form? </a> </p>

    </fieldset>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            if (empty($_POST["name"])) // Specific error messages for what fields of the form you are missing.
            {
                echo "<p class=\"error\"> Please fill out your name! </p>";
            }
            if (empty($_POST["email"]))
            {
                echo "<p class=\"error\"> Please fill out your email! </p>";
            }
            if (empty($_POST["amount"]))
            {
                echo "<p class=\"error\"> Please fill out your amount! </p>";
            }
            if (empty($_POST["currency"]))
            {
                echo "<p class=\"error\"> Please select your currency! </p>";
            }
            if ($_POST["bank"] == NULL)
            {
                echo "<p class=\"error\"> Please select your banking institution! </p>";
            }


            if (isset($_POST["name"], 
            $_POST["email"],
            $_POST["amount"],
            $_POST["currency"],
            $_POST["bank"])) // If all fields are filled:
            {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $amount = floatval($_POST["amount"]); // floatval() makes sure our numbers are always numbers. This means a null answer is 0.
                $currency = floatval($_POST["currency"]);
                $bank = $_POST["bank"];

                $dollars = $amount * $currency; // The amount of dollars we have is the amount of foreign currency ($amount) multiplied by the conversion
                // rate ($currency).

                if(!empty($name && $email && $amount && $currency) && $bank != NULL) // Make sure a half filled out form won't just give you results WITH
                // the error messages...
                {
                    $dollars_formatted = number_format($dollars, 2);
                    $dollars_formatted = "$" . $dollars_formatted;

                    echo 
                    "<div class=\"box\">
                    <h2> Hello $name! </h2>
                    <p> You now have <b>$dollars_formatted</b> American dollars and we will be emailing you at <b>$email</b> with your information
                    as well as depositing your funds at <b>$bank</b>. </p> 
                    <br>";

                    if ($dollars < 1)
                    {
                        echo '<h2> I am VERY unhappy, because I only have <span style="color: red; background-color: pink;">'.$dollars_formatted.'</span>... That\'s less than a dollar! </h2>
                        <iframe width="400" height="315" src="https://www.youtube-nocookie.com/embed/pumVu-WWhKM?si=t8BKhArAHYOqB2hV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                    }
                    elseif ($dollars < 500)
                    {
                        echo '<h2> I am not very happy, because I only have '.$dollars_formatted.' American dollars! </h2>
                        <iframe width="400" height="315" src="https://www.youtube-nocookie.com/embed/Zzo6L3wsf8c?si=mw8kew7bWbjmoEDz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                    }
                    elseif ($dollars < 1000)
                    {
                        echo '<h2> I am happy, because I have '.$dollars_formatted.' American dollars! </h2>
                        <iframe width="400" height="315" src="https://www.youtube-nocookie.com/embed/rNlyF43Te6U?si=2JlBfg5_6HAj-VJj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                    }
                    else 
                    {
                        echo '<h2> I am VERY happy, because I have <span style="color: green; background-color: lightgreen;">'.$dollars_formatted.'</span> American dollars! </h2>
                        <iframe width="400" height="315" src="https://www.youtube-nocookie.com/embed/mZRP7nQkfrM?si=vNusC2imyl6WRw8a" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                    }

                    echo "</div>";
                }
            }

        } // End $_SERVER request.
    ?>

</body>

</html>