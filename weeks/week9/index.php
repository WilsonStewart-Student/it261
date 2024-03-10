<?php // This is our index.php page, which is the home page for a logged-in user.

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

include("includes/header.php");
echo "<header>";

    // If our session for our username is successful, (a user is logged in) we will display a message!
    if (isset($_SESSION["success"])) { ?>

    <div class="success">
        <h3> 
            <?php
            echo $_SESSION["success"];
            unset($_SESSION["success"])
            ?>
        </h3>
    </div> <!-- End "success". -->

    <?php } // End "if (isset($_SESSION["success"]))". 

    // We will also display a welcome/logout message for our user!
    if (isset($_SESSION["username"])) {
    ?>

    <div class="welcome-logout">
        <h3>
            <?php 
            echo "Hello ".$_SESSION["username"]."!"
            ?>
        </h3>
        <!-- If the user wants to log out, the page will reload with logout set to "1" (true?). -->
        <!-- Which will promptly send the user back to the login page. -->
        <a href="index.php?logout='1'"> Log out? </a>
    </div> <!-- End "welcome-logout". -->
    <?php } // End "if (isset($_SESSION["username"]))". ?>

</header>

<div id="wrapper">

    <h1> Welcome to the Home Page of our Website! </h1>

</div> <!-- End "wrapper". -->

<?php 
include ("includes/footer.php");
?>