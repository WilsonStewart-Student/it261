<?php
include("inc/header-loggedin.php");

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

$sql = "SELECT * from caterpillars WHERE catr_id = ".$id."";
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
    {
        // stripslashes() removes and escape characters a database might need to use when storing data, for displaying it normally.
        $catr_id = stripslashes($row["catr_id"]);
        $catr_name = stripslashes($row["catr_name"]);
        $catr_file = stripslashes($row["catr_file"]);
        $catr_desc = stripslashes($row["catr_desc"]);

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
        <h1> $catr_name </h1>
        <div class=\"fuzzy-frame\">
        <img src='img/$catr_file' alt='Image of $catr_name'>
        </div>
        <p> $catr_desc </p>
        "; 
    ?>
    </main>

    <aside>
    <?php 
        echo 
        "
        <a href='project.php'> Return to my favorite caterpillars / project page? </a>
        "; 
    ?>
    </aside>

    </div> <!-- End "wrapper". -->

<?php
include("inc/footer.php");
?>