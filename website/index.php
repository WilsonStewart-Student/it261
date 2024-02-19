<?php

include("config.php");
include("includes/header.php");

?>

    <div id="wrapper">

        <main>
            <h1> Welcome to our Web App Programming Class! </h1>
            <h2> We are going to learn PHP! </h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pellentesque ullamcorper elit sit amet tincidunt. Aenean sed augue augue. Integer accumsan metus turpis. Aenean urna massa, iaculis ut nunc quis, viverra tincidunt est. Ut eget facilisis leo. Suspendisse vehicula mattis malesuada. Suspendisse sit amet sollicitudin ligula. Maecenas elementum est nec rutrum maximus. </p>

            <h2> Another Headline 2! </h2>
            <p> Sed blandit pulvinar semper. Vivamus mattis facilisis arcu et tincidunt. Aliquam nec tincidunt neque, ac dignissim eros. Curabitur fermentum convallis vestibulum. Praesent eleifend tellus eget purus ultrices fermentum. Etiam hendrerit luctus sapien non pretium. Proin eu finibus leo. In vel vestibulum erat. Proin non dui quis massa commodo aliquet. Nullam efficitur scelerisque odio, id aliquet mi feugiat quis. Pellentesque malesuada magna in ipsum malesuada convallis. </p>
        </main>

        <aside>
            <h3> Please enjoy this random image of Twilight, courtesy of my aside! </h3>
            <?php
            $photos[0] = "twilight1";
            $photos[1] = "twilight2";
            $photos[2] = "twilight3";
            $photos[3] = "twilight4";

            function random_images($photos)
            {
                $my_return = "";

                $i = rand(0, 3);
                $selected_image = "".$photos[$i].".png";

                $my_return = "<img src='images/$selected_image' alt='".$photos[$i]."'>";
                return $my_return;
            } // End random_images().

            echo random_images($photos);

            ?>
        </aside>

    </div> <!-- End "wrapper". -->

<?php

include("includes/footer.php"); // Appends the footer HTML that we have stored in a different file. This makes it easy to repeat elements that show up a lot. :)

?>