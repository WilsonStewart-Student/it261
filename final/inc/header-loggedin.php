<?php

session_start();
include('config.php');

// If the username has not been set, you will not see the index.php file, BUT will be directed back to the login page!
if (!isset($_SESSION["username"]))
{
    header("Location: login.php");
}

// If the user logs out, DESTROY the session, and get rid of the session username!
// Then, direct them back to the login page as well!
if (isset($_GET["logout"]))
{
    session_destroy();
    unset($_SESSION["username"]);
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time(); ?>">
    <title> <?php echo $title; ?> </title>
</head>

<body class="<?php echo $body; ?>">
 
    <header>
        <div id="inner-header">
            <nav>  
                <ul>
                <li> <a href="index.php"> <img src="img/pillar-planet.png" alt="The 3D logo for Pillar Planet."> </a> </li>
                <?php echo make_links($nav); // From config.php. ?>
                </ul>
            </nav>
        </div> <!-- End "inner-header". -->
        <div class="login-info">
        <?php
                // If our session for our username is successful, (a user is logged in) we will display a message!
                if (isset($_SESSION["success"])) { ?>

                    <p> 
                        <?php
                        echo $_SESSION["success"];
                        unset($_SESSION["success"]);
                        }

                        // We will also display a welcome/logout message for our user!
                        if (isset($_SESSION["username"])) {
                        ?>

                        <?php 
                        echo "<p> Hello ".$_SESSION["username"]."! </p>"
                        ?>
                    <!-- If the user wants to log out, the page will reload with logout set to "1" (true?). -->
                    <!-- Which will promptly send the user back to the login page. -->
                    <p> <a href="index.php?logout='1'"> Log out? </a> <p>
                </div> <!-- End "login-info". -->

                <?php } // End "if (isset($_SESSION["username"]))". ?>
                
    </header>

    <!-- Visual effect div: -->
    <div id="sky"> </div>