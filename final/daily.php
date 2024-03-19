<?php
include("inc/header-loggedin.php");
?>

<?php 

    date_default_timezone_set("America/Los_Angeles");

    if (isset($_GET["today"]))
        {
            $today = $_GET["today"]; // If $_GET["today"] IS set, assign its value to $today.
        }
        else 
        {
            $today = date("l"); // $_GET["today"] ISN'T set, assign its value to date("l"), which is the current day of the week..
        }

        // $today = "Saturday";

    switch($today)
    {
        case "Sunday":
            $caterpillar = "<h2> Lonomia Obliqua Caterpillars </h2>";
            $pic = "img/lonomia-obliqua.png";
            $alt = "Lonomia Obliqua Caterpillars";
            $color = "#6b2387";
            $content = "<p> Not all hairy caterpillars have venom. The ones that do can cause a range of symptoms from simply discomforting to downright dangerous. This hairy caterpillar's venom can kill you-- causing disseminated intravascular coagulation and thus intense internal bleeding! An absolutely insane and downright terrifying defense mechanism for something so small, but another testament to the incredible diversity of caterpillars. </p>";
        break;
    
        case "Monday":
            $caterpillar = "<h2> Hickory Horned Devil Caterpillars </h2>";
            $pic = "img/hickory-horned-devil.png";
            $alt = "Hickory Horned Devil Caterpillars";
            $color = "#E581B1";
            $content = "<p> The Hickory Horned Devil Caterpillar (Citheronia regalis), is the largest caterpillar in North America, and possibly the world. They can grow up to around 6 inches long, and be wider than a finger! Also, despite their spiky exterior, these caterpillars do not sting and are safe to handle with bare hands. </p>";
        break;
    
        case "Tuesday":
            $caterpillar = "<h2> Large Blue Butterfly Caterpillars </h2>";
            $pic = "img/large-blue.png";
            $alt = "Large Blue Butterfly Caterpillars";
            $color = "#59bd39";
            $content = "<p> Large Blue Butterfly Caterpillars are caterpillars with an interesting trait... That trait being: carnivorous brood parasitism! Unlike other caterpillars who spend their days munching on their favorite plants, Large Blue Butterfly Caterpillars find their food by invading ant nests with chemical, physical, and behavioral trickery! Once inside they seemingly adopt one of two strategies-- pretending to be a larval ant queen in order to be fed by worker ants, or going for the riskier approach and posing as an indistinct ant while feeding on as much ant pupae as it can. </p>";
        break;

        case "Wednesday":
            $caterpillar = "<h2> Monkey Slug Caterpillars </h2>";
            $pic = "img/monkey-slug.png";
            $alt = "Monkey Slug Caterpillars";
            $color = "#27b5f2";
            $content = "<p> You've probably seen hairy caterpillars before, but have you seen one like this? The Monkey Slug Caterpillar is an odd creature-- perhaps evolved to mimic a hairy spider, although in a pretty abstract way. There are mixed reports on whether or not the hairs on this caterpillar are harmful to humans, but it's generally not recommended to handle it, especially if one has sensitive skin. </p>";
        break;
    
        case "Thursday":
            $caterpillar = "<h2> Bagworm Caterpillars </h2>";
            $pic = "img/bagworm.png";
            $alt = "Bagworm Caterpillars";
            $color = "#4A1767";
            $content = "<p> Bagworm Caterpillars, or caterpillars from the family Psychidae, are a cool bunch of caterpillar architects! Using silk and available materials, these handy caterpillars construct cases that they wear as protective mobile-homes. In my opinion, the coolest type of bagworm house has to be the \"log cabin\" (pictured). The shape they build is very cute! </p>";
        break;
    
        case "Friday":
            $caterpillar = "<h2> Hemeroplanes Triptolemus Caterpillars </h2>";
            $pic = "img/hemeroplanes-triptolemus.png";
            $alt = "Hemeroplanes Triptolemus Caterpillars";
            $color = "#b50264";
            $content = "<p> Mimicking snakes isn't an unheard of defense mechanism for caterpillars, but in my opinion, no one does it better than Hemeroplanes Triptolemus Caterpillars. By hanging onto something with their prolegs and tossing their head back, they display an impressively convincing snake face-- and sometimes get so into the act that they will pretend to strike at potential predators! </p>";
        break;
    
        case "Saturday":
            $caterpillar = "<h2> Saturday - Jewel Caterpillars </h2>";
            $pic = "img/jewel.png";
            $alt = "Saturday - Jewel Caterpillars ";
            $color = "#50C356";
            $content = "<p> Jewel Caterpillars, or caterpillars from the family Dalceridae, are caterpillars with an eye-catching special trait-- the gelatinous mass that covers their bodies! It's designed to gum up the mouths of attackers, and is seemingly a frustrating enough defense that most smaller attackers will back off. </p>";
        break;
    }

?>

    <div id="wrapper">

            <main>
                <h1> UNIQUE CATERPILLAR OF THE DAY </h1>
                <h2> Displaying and Celebrating the Diversity of Caterpillars! </h2>
                <div class="fuzzy-frame">
                    <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
                </div> <!-- End "fuzzy-frame". -->
                <?php echo $content; ?>
            </main>

            <aside>
                <h1> OTHER CATERPILLARS OF THE DAY</h1>
                <ul>
                    <li> <h3> <a href="daily.php?today=Sunday"> • Sunday </a> </h3> </li>
                    <li> <h3> <a href="daily.php?today=Monday"> • Monday </a> </h3> </li>
                    <li> <h3> <a href="daily.php?today=Tuesday"> • Tuesday </a> </h3> </li>
                    <li> <h3> <a href="daily.php?today=Wednesday"> • Wednesday </a> </h3> </li>
                    <li> <h3> <a href="daily.php?today=Thursday"> • Thursday </a> </h3> </li>
                    <li> <h3> <a href="daily.php?today=Friday"> • Friday </a> </h3> </li>
                    <li> <h3> <a href="daily.php?today=Saturday"> • Saturday </a> </h3> </li>
                </ul>
            </aside>

    </div> <!-- End "wrapper". -->

<?php
include("inc/footer.php"); 
?>