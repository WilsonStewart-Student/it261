<?php

    define("THIS_PAGE", basename($_SERVER ["PHP_SELF"])); // This variable is defined as whatever page this PHP line is on. Here, THIS_PAGE is index.php

    switch(THIS_PAGE)
    {
        case "index.php" : // When THIS_PAGE = index.php, the following variables are defined as so.
            $title = "Home page of our Website Project";
            $body = "home";
        break;

        case "about.php" : // When THIS_PAGE = about.php, the following variables are defined as so.
            $title = "About page of our Website Project";
            $body = "about inner";
        break;

        case "daily.php" : 
            $title = "Daily page of our Website Project";
            $body = "daily inner";
        break;

        case "project.php" : 
            $title = "Project page of our Website Project";
            $body = "project inner";
        break;

        case "gallery.php" : 
            $title = "Gallery page of our Website Project";
            $body = "gallery inner";
        break;
    }

        // Our navigational array:
        $nav = array
    (
        "index.php" => "Home", 
        "about.php" => "About",
        "daily.php" => "Daily",
        "project.php" => "Project",
        "contact.php" => "Contact",
        "gallery.php" => "Gallery" 
    );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> <?php echo $title; ?></title>
</head>

<body class="<?php echo $body; ?>">

<header>
    <div class="inner-header">

        <a href="index.php">
            <img id="logo" src="images/logo.png" alt="The elephant PHP logo, edited with a purple-and-pink theme.">
        </a>

        <nav>  
            <ul>
            <?php
                foreach($nav as $key => $value)
                {
                    if (THIS_PAGE == $key)
                        {
                            echo "<li> <a style=\"color:#6b1fb1; text-shadow: #6b1fb1 0 0 10px;\" href=\"$key\"> $value </a> </li>";
                        }
                        else 
                        {
                            echo "<li> <a style=\"color:#f8e3c4\"  href=\"$key\"> $value </a> </li>";
                        }
                } // End foreach.
            ?>
            </ul>
        </nav>

    </div> <!-- End "inner-header". -->
</header>

<div id="hero">
            <img src="images/star-divider.gif" alt="Twinkling pink stars!" class="divider-img">
            <img src="images/star-divider.gif" alt="Twinkling pink stars!" class="divider-img">
            <img src="images/star-divider.gif" alt="Twinkling pink stars!" class="divider-img">
</div> <!-- End "hero". -->