<?php
include("inc/header-loggedin.php");


$hornworms = array(
    "hw1.jpg Rebellious phase...",
    "hw2.jpg Green sausage no. 1.",
    "hw3.jpg Green sausage no. 2.",
    "hw4.jpg Food is also a blanket!",
    "hw5.jpg The markings that look like eyes are called spiracles, and are actually breathing holes.",
    "hw6.jpg Little close up..."
);
?>

    <div id="wrapper">

        <div id="main-aside">
            <h1> NOT THAT GOOD PICTURES OF MY PET HORNWORMS </h1>
            <div id="gallery">
                <?php 
                    foreach ($hornworms as $hw) 
                    {
                        ?>
                        <figure>
                        <div class="fuzzy-frame">
                        <img src="img/<?php echo substr($hw, 0, 7) ?>" alt="Image of a pet tomato hornworm.">
                        </div> <!-- End "fuzzy-frame". -->
                        <figcaption> <p> <?php echo substr($hw, 7) ?> </p> </figcaption>
                        </figure>
                        <?php
                    }
                ?>     
                </div> <!-- End "gallery". -->
        </div> <!-- End "main-aside" -->

    </div> <!-- End "wrapper". -->

<?php
include("inc/footer.php"); // Appends the footer HTML that we have stored in a different file. This makes it easy to repeat elements that show up a lot. :)
?>