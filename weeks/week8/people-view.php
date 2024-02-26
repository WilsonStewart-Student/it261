<?php

include("config.php");

// Get the relevant "people" id if it's been set:
if(isset($_GET["id"]))
{
    $id = (int)$_GET["id"];
}
// If it hasn't been set, send us back to people.php!
else
{
    header("Location: people.php");
}

// For explanations of the below code, see people.php.

$sql = "SELECT * from people WHERE people_id = ".$id."";
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        // stripslashes() removes and escape characters a database might need to use when storing data, for displaying it normally.
        $id = stripslashes($row["people_id"]);
        $first_name = stripslashes($row["first_name"]);
        $last_name = stripslashes($row["last_name"]);
        $email = stripslashes($row["email"]);
        $birthdate = stripslashes($row["birthdate"]);
        $occupation = stripslashes($row["occupation"]);
        $blurb = stripslashes($row["blurb"]);
        $details = stripslashes($row["details"]);

        $feedback = "";
    } // End while.
}
else
{
    $feedback = "Houston, we have a problem!";
}

include("includes/header.php");


@mysqli_free_result($result);
@mysqli_close($iConn);
?>

<main>
    <h1> Welcome to our People View Page!</h1>
    <h2> Introducing: <?php echo $first_name; ?> </h2>
    <ul>
        <?php echo 
        "
        <li> <b>First name:</b> ".$first_name." </li>
        <li> <b>Last name:</b> ".$last_name." </li>
        <li> <b>Email:</b> ".$email." </li>
        <li> <b>Birthdate:</b> ".$birthdate." </li>
        <li> <b>Occupation:</b> ".$occupation." </li>
        "; ?>
    </ul>
    <p> <?php echo $details ?></p>
    <p> Return to our <a href="people.php"> People Page</a>?</p>
</main>

<aside>
    <h3> Aside information that will display our person's image! </h3>
    <figure>
        <img src="images/people<?php echo $id ?>.jpg" alt="<?php echo $first_name ?>">
        <figcaption> <?php echo $blurb; ?> </figcaption>
    </figure>
</aside>

</div> <!-- End wrapper (started in our header include.) -->

<?php

include ("includes/footer.php");