<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> Arithmetic Form </title>
</head>

<body>

    <h1> Our Arithmetic Form! </h1>

    <form action="" method="post">
        <fieldset>

        <label> Name </label>
        <input type="text" name="name">

        <label> Phone Number </label>
        <input type="tel" name="phone">

        <label> How many Lattes? </label>
        <input type="number" name="lattes" min="0">

        <label> How many Cappuccinos? </label>
        <input type="number" name="cappuccinos" min="0">

        <label> How many Americanos? </label>
        <input type="number" name="americanos" min="0">

        <label> Any special requests? </label>
        <textarea name="special_requests"> </textarea>

        <input type="submit" value="Send Order">

        </fieldset>
    </form>

    <p> <a href=""> Reset Form </a> </p>

    <?php

        date_default_timezone_set("America/Los_Angeles");
        $our_time = date("H:i"); // Hours:minutes

        if(isset($_POST["name"], $_POST["phone"], $_POST["lattes"], $_POST["cappuccinos"], $_POST["americanos"], $_POST["special_requests"]))
        // If our variables have been set through our form:
        {
            // $name = $_POST["name"];
            // $phone = $_POST["phone"];
            // $lattes = $_POST["lattes"];
            // $cappuccinos = $_POST["cappuccinos"];
            // $americanos = $_POST["americanos"];
            // $special_requests = $_POST["special_requests"];

            if (empty($_POST["name"] && $_POST["phone"] && $_POST["lattes"] && $_POST["cappuccinos"] && $_POST["americanos"] && $_POST["special_requests"]))
            {
                echo "<p class=\"error\"> Please fill out all of the fields! </p>";
            }
            else 
            {
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $lattes = $_POST["lattes"];
                $cappuccinos = $_POST["cappuccinos"];
                $americanos = $_POST["americanos"];
                $special_requests = $_POST["special_requests"];

                $total = $lattes + $cappuccinos + $americanos;

                if ($our_time <= 11) // Determine time-related message.
                {
                    $our_time = "Good morning,";
                }
                elseif ($our_time <= 17)
                {
                    $our_time = "Good afternoon,";
                }
                else 
                {
                    $our_time = "Good evening,";
                }

                echo 
                "
                <div class=\"box\">
    
                <h2> $our_time $name! </h2>
                <p> We have confirmed your order to <b>this number</b>: $phone totaling $total beverages: </p>
                <ul>
                <li> $lattes lattes, </li>
                <li> $cappuccinos cappuccinos, </li>
                <li> $americanos americanos. </li>
                </ul>
                <p> And this is your <b> special request</b>: $special_requests </p>
                <p> Thank you for choosing our establishment! </p>
    
                </div>
                ";
            }
        }

    ?>

</body>

</html>