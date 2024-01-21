<?php 

// The isset function()
// The isset() function asks if something has been set.

// $variable = "This is our variable.";
// if (isset($variable))
//     {
//         echo "Variable has been set!";
//     }
//     else 
//     {
//         echo "Variable has not been set.";
//     }
// //

// echo "<br>";

// if (isset($_GET["today"])) 
//     {
//         echo "Today has been set!";
//     }
//     else
//     {
//         echo "Today has not been set.";
//     }
// //

if (isset($_GET["today"]))
    {
        $today = $_GET["today"]; // If $_GET["today"] IS set, assign its value to $today.
    }
    else 
    {
        $today = date("l"); // $_GET["today"] ISN'T set, assign its value to date("l"), which is the current day of the week..
    }
//

switch($today)
{
    case "Wednesday":
        $coffee = "<h2> Wednesday is our Frappuccino Day! </h2>";
        $pic = "images/frap.jpg";
        $alt = "Frappuccino";
        $content = "<p> <b>Frappuccino</b> is a line of blended iced coffee drinks sold by Starbucks. It may consist of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices. </p>";
    break;

    case "Thursday":
        $coffee = "<h2> Thursday is our Cappuccino Day! </h2>";
        $pic = "images/cap.jpg";
        $alt = "Cappuccino";
        $content = "<p> A <b>cappuccino</b> is an espresso-based coffee drink that is traditionally prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or cocoa powder. </p>";
    break;

    case "Friday":
        $coffee = "<h2> Friday is our Pumpkin Latte Day! </h2>";
        $pic = "images/pumpkin.jpg";
        $alt = "Pumpkin Latte";
        $content = "<p> The <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional fall spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. </p>";
    break;

    case "Saturday":
        $coffee = "<h2> Saturday is our Green Tea Latte Day! </h2>";
        $pic = "images/green-tea.jpg";
        $alt = "Green Tea Latte";
        $content = "<p> A <b>green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a <b>green tea latte</b>, we remove the coffee and use tea in its place. </p>";
    break;

    case "Sunday":
        $coffee = "<h2> Sunday is our Regular Joe Day! </h2>";
        $pic = "images/coffee.png";
        $alt = "Regular Coffee";
        $content = "<p> <b>American coffee</b>, as opposed to espresso, or a derived coffee drink (cappuccino, latte, iced coffee, etc). Served with cream and sugar. </p>";
    break;

    case "Monday":
        $coffee = "<h2> Monday is our Latte Day! </h2>";
        $pic = "images/latte.jpg";
        $alt = "Latte";
        $content = "<p> A <b>latte</b> or <b>caffè latte</b> is a milk coffee that is a made up of one or two shots of espresso, steamed milk and a final, thin layer of frothed milk on top. </p>";
    break;

    case "Tuesday":
        $coffee = "<h2> Tuesday is our Americano Day! </h2>";
        $pic = "images/americano.jpg";
        $alt = "Americano";
        $content = "<p> <b>Caffè americano</b>, also known as <b>Americano or American</b>, is a type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio, resulting in a drink that retains the complex flavors of espresso, but in a lighter way. </p>";
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Switch Classwork Exercise </title>

    <style>
    *
    {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    #wrapper 
    {
        width: 940px;
        margin: 20px auto;
    }

    img 
    {
        height: 350px;
    }

    h1, h2, img
    {
        margin-bottom: 10px;
    }

    p 
    {
        margin-bottom: 20px;
    }

    </style>
</head>

<body>

    <div id="wrapper">
        <h1> My wonderful Switch Classwork Exercise (Not the daily homework!)</h1>
        <?php echo $coffee; ?>
        <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <?php echo $content; ?>

        <h2> Check out our daily specials!</h2>
        <ul>
            <!-- An example of a link that changes a variable...! -->
            <li> <a href="switch.php?today=Sunday"> Sunday </a> </li> 
            <li> <a href="switch.php?today=Monday"> Monday </a> </li> 
            <li> <a href="switch.php?today=Tuesday"> Tuesday </a> </li> 
            <li> <a href="switch.php?today=Wednesday"> Wednesday </a> </li> 
            <li> <a href="switch.php?today=Thursday"> Thursday </a> </li> 
            <li> <a href="switch.php?today=Friday"> Friday </a> </li> 
            <li> <a href="switch.php?today=Saturday"> Saturday </a> </li> 

        </ul>
    </div> <!-- End "wrapper". -->

</body>

</html>