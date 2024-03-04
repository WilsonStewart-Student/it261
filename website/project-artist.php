<?php

    include("config.php");
    include("includes/header.php");

    // If the featured artist id has been set, get that:
    if(isset($_GET["id"]))
    {
        $id = (int)$_GET["id"];
    }
    // If not, head back to project.php.
    else
    {
        header("Location: project.php");
    }

    $sql = "SELECT * from artists WHERE artist_id = ".$id."";
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if (mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_assoc($result))
        {
            // stripslashes() removes and escape characters a database might need to use when storing data, for displaying it normally.
            $id = stripslashes($row["artist_id"]);
            $name = stripslashes($row["name"]);
            $art = stripslashes($row["art_file"]);
            $details = stripslashes($row["details"]);
            $link = stripslashes($row["link"]);

            $feedback = "";
        }
    }
    else
    {
        $feedback = "Houston, we have a problem!";
    }

    @mysqli_free_result($result);
    @mysqli_close($iConn);

?>

<div id="wrapper">

<main>
<?php 
    echo 
    "
    <img src='images/$art' alt='Art of $name' class='art-full'>
    "; 
?>
</main>

<aside>
<?php 
    echo 
    "
    <h1> $name </h1>
    <p> $details </p>
    <a href='$link'> Artist Link </a>
    <br>
    <a href='project.php'> Return to artist / project page? </a>
    "; 
?>
</aside>

</div> <!-- End "wrapper". -->

<?php

include("includes/footer.php"); // Appends the footer HTML that we have stored in a different file. This makes it easy to repeat elements that show up a lot. :)

?>