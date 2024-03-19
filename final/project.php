<?php
include("inc/header-loggedin.php");
?>

    <div id="wrapper">

        <div id="main-aside">  
            <h1> MY FAVORITE CATERPILLARS </h1> 

            <?php 
            # This process is explained in people.php.
            $sql = "SELECT * from caterpillars"; 
            $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
            $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
            ?>
            <div id="gallery">
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
                echo  
                "
                <figure>
   
                <a href='project-caterpillar.php?id=".$row["catr_id"]."'> 
                <div class=\"fuzzy-frame\">
                <img src='img/".$row["catr_file"]."' alt='Image of ".$row["catr_name"]."'>
                </div> 
                </a>
                <figcaption> <p> ".$row["catr_name"]." </p> </figcaption>
                </figure>
                ";
            }
            ?>
            </div>
            <?php
            @mysqli_free_result($result);
            @mysqli_close($iConn);
            ?>
        </div> <!-- End "main-aside". -->

    </div> <!-- End "wrapper". -->

<?php
include("inc/footer.php");
?>