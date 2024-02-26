<?php
// Grab config.php which grabs credentials.php!
include("config.php");
// And a header!
include("includes/header.php");
?>

<main>
    <h1> Welcome to our People Page!</h1>

<?php
// Find our "people" table, and select all (*) the data from it!
$sql = "SELECT * from people"; 

// Now, connect to the database, using all of our credentials from credentials.php.
// If for some reason we can't connect to the database... we DIE!!!
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// When we are connected, assign the connection to result.
// Or if we can't do that... ALSO DIE!!!
// SQL is very dangerous.
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// Now that we (presumably) have our SQL database connected:
// Let's create an array for our table rows, in "people":
if (mysqli_num_rows($result) > 0)
{

    // While there are results to assign to the $row variable, echo their content:
    // $row here becomes like an associative array for each row of our database. (As I understand it.)
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
        "
        <h2> Information about: ".$row["first_name"]." ".$row["last_name"]." </h2>

        <ul>
        <li> Email: ".$row["email"]." </li>
        <li> Birthdate: ".$row["birthdate"]." </li>
        </ul>

        <p> For more information about  ".$row["first_name"].", click <a href=\"people-view.php?id=".$row["people_id"]."\">here</a>! </p>
        ";
    } // End while.

}
else
{
    echo "Nobody home!";
}

// Now we are going to release the server:
// By freeing the result variable:
@mysqli_free_result($result);
// And disconnecting from the server:
@mysqli_close($iConn);
?>

</main>

<aside>
</aside>

</div> <!-- End wrapper (started in our header include.) -->

<?php

include ("includes/footer.php");