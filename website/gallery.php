<?php
include("config.php");
include("includes/header.php");

$element['The_Element_of_Honesty'] = 'e_o_ho Represented by Applejack.';
$element['The_Element_of_Kindness'] = 'e_o_ki Represented by Fluttershy.';
$element['The_Element_of_Laughter'] = 'e_o_la Represented by Pinkie Pie.';
$element['The_Element_of_Generosity'] = 'e_o_ge Represented by Rarity.';
$element['The_Element_of_Loyalty'] = 'e_o_lo Represented by Rainbow Dash.';
$element['The_Element_of_Magic'] = 'e_o_ma Represented by Twilight Sparkle.';
?>

    <div id="wrapper">

        <main>

            <h1 class="glow"> The Elements of Harmony</h1>
            <h4> <i> The Elements of Harmony were six supernatural artifacts representing aspects of harmony. These aspects were: </i> </h4>

            <table id="elements-of-harmony">
                <?php
                // $name is the key, $image is the value.
                foreach($element as $name => $image)
                {
                ?>
                    <tr> 
                        <!-- Display image by taking the part of the value that is the image name. These all start from the beginning and are 5 letters. -->
                        <td> <img src="images/<?php echo substr($image, 0, 6) ?>.png" alt="<?php echo str_replace("_", " ", $name) ?>" style="width:40px"> </td>
                        <!-- Replace underscores in names with spaces. -->
                        <td> ✧ <?php echo str_replace("_", " ", $name)?></td>
                        <td> <?php echo substr($image, 6) ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <p id="element-credit"> Images by <a href="https://www.deviantart.com/ewized"> ewized </a> on DeviantArt!</p>

        </main>

        <aside>
            <img src="images/using-the-elements.png" alt="The Mane 6 using the Elements of Harmony.">
        </aside>

    </div> <!-- End "wrapper". -->

<?php
include("includes/footer.php");
?>