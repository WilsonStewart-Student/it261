<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> Our Celcius Document </title>
</head>

<body>

    <h1> Celcius Form Converter</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <fieldset>

        <label> Enter your Celcius value!</label>
        <input type="number" name="cel">

        <input type="submit" value="Convert it!">
        </fieldset>
    </form>
    <p> <a href=""> Reset </a> </p>

    <?php 
    
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {

            if (isset($_POST["cel"]))
            {
                $cel = $_POST["cel"];

                // Make sure $cel is an integer by using intval()!
                $cel_int = intval($cel);
                $far = ($cel_int * (9/5)) + 32;

                // If the end user does not enter a value, say something:
                if($cel == NULL)
                {
                    echo "<p class=\"error\"> Please fill out the Celcius value! </p>";
                }
                elseif($far <= 32)
                {
                    echo "
                    <br>
                    <p> $cel_int degrees Celcius is $far degrees Fahrenheit. </p>
                    <br>
                    <p> ...and it is pretty cold out here!";
                }
                elseif($far <= 45)
                {
                    echo "
                    <br>
                    <p> $cel_int degrees Celcius is $far degrees Fahrenheit. </p>
                    <br>
                    <p> ...and it is getting warmer!";
                }
                elseif($far <= 60)
                {
                    echo "
                    <br>
                    <p> $cel_int degrees Celcius is $far degrees Fahrenheit. </p>
                    <br>
                    <p> ...and it is sweater weather!";
                }
                elseif($far <= 75)
                {
                    echo "
                    <br>
                    <p> $cel_int degrees Celcius is $far degrees Fahrenheit. </p>
                    <br>
                    <p> ...and we're going to the park!";
                }
                elseif($far <= 80)
                {
                    echo "
                    <br>
                    <p> $cel_int degrees Celcius is $far degrees Fahrenheit. </p>
                    <br>
                    <p> ...and we may be going to the beach!";
                }
                else
                {
                    echo "
                    <br>
                    <p> $cel_int degrees Celcius is $far degrees Fahrenheit. </p>
                    <br>
                    <p> ...and we are at the beach!";
                }
            }

        }
    
    ?>

</body>

</html>