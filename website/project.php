<?php

include("config.php");
include("includes/header.php");

?>

    <div id="wrapper">

        <div id="main-aside">  
            <h1> My Favorite MLP Artists / Fanartists! </h1> 

            <?php 
            # This process is explained in people.php.
            $sql = "SELECT * from artists"; 
            $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
            $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

            while($row = mysqli_fetch_assoc($result))
            {
                if ($row["artist_id"] == 1)
                {
                    echo "<div class='art-preview-column'>";
                }

                make_artist_preview($row);

                if ($row["artist_id"] % 2 == 0)
                {
                    echo "</div>";
                    echo "<div class='art-preview-column'>";
                }

                if ($row["artist_id"] == 10)
                {
                    echo "</div>";
                }
            }

            function make_artist_preview($row)
            {
                echo  
                "
                <div class='art-preview-div'>
                <a href='project-artist.php?id=".$row["artist_id"]."'> <img src='images/".$row["art_file"]."' alt='Art of ".$row["name"]."' class='art-preview'> 
                <p> ".$row["name"]." </p> </a>
                </div>
                ";
            }

            @mysqli_free_result($result);
            @mysqli_close($iConn);
            ?>
        </div> <!-- End "main-aside". -->


    </div> <!-- End "wrapper". -->

<?php

include("includes/footer.php"); // Appends the footer HTML that we have stored in a different file. This makes it easy to repeat elements that show up a lot. :)

?>