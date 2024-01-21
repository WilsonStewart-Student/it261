<?php
include("includes/header.php");
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
            $pony = "<h2> Sunday's Pony of the Day is Twilight Sparkle! </h2>";
            $pic = "images/twilight.png";
            $alt = "Twilight Sparkle";
            $color = "#6b2387";
            $content = "<p> Dutiful and intelligent, Princess Twilight Sparkle is an A+ student of all things magical. Though her attention to detail can become extreme at times, Twilight's eagerness to lend a helping hoof endears her to her friends. She's become an expert not only in magic, but in friendship too, which has transformed her into a powerful Alicorn princess -- a Unicorn with wings. </p>";
        break;
    
        case "Monday":
            $pony = "<h2> Monday's Pony of the Day is Fluttershy! </h2>";
            $pic = "images/fluttershy.png";
            $alt = "Fluttershy";
            $color = "#E581B1";
            $content = "<p> Graceful Fluttershy has a special way with forest animals. Her favorite thing is to care for them in her quiet meadow cottage. That's because Fluttershy is, well ... shy. She's sweet, soft-spoken, and kind of a scaredy-pony. Her friends love her for her kindness, and they work hard to bring her out of her shell. </p>";
        break;
    
        case "Tuesday":
            $pony = "<h2> Tuesday's Pony of the Day is Applejack! </h2>";
            $pic = "images/applejack.png";
            $alt = "Applejack";
            $color = "#59bd39";
            $content = "<p> Applejack is a country pony who grew up on her family's apple farm. She's down to earth and dependable, and she's not afraid to get her hooves dirty. To her, any job can be done with a little horse sense and hard work. Applejack has a knack for figuring out how to fix a problem -- fast! </p>";
        break;

        case "Wednesday":
            $pony = "<h2> Wednesday's Pony of the Day is Pinkie Pie! </h2>";
            $pic = "images/pinkie.png";
            $alt = "Pinkie Pie";
            $color = "#27b5f2";
            $content = "<p> Pinkie Pie is a free spirit who prances to the beat of her own drum. Actually, she prances to the sound of her own singing. She's playful and full of energy. She can talk till the ponies come home. She loves to invent silly songs, giggle, skip, and make her friends laugh. </p>";
        break;
    
        case "Thursday":
            $pony = "<h2> Thursday's Pony of the Day is Rarity! </h2>";
            $pic = "images/rarity.png";
            $alt = "Rarity";
            $color = "#4A1767";
            $content = "<p> With her gleaming white coat and royal purple curls, Rarity is the most beautiful unicorn in Ponyville. And she knows it. After all, heads turn when she prances down the street. A talented fashion designer, Rarity loves to give the other ponies makeovers, and her dream is to design for Princess Celestia. </p>";
        break;
    
        case "Friday":
            $pony = "<h2> Friday's Pony of the Day is Rainbow Dash! </h2>";
            $pic = "images/rainbow.png";
            $alt = "Rainbow Dash";
            $color = "#b50264";
            $content = "<p> Rainbow Dash lives for adventure! Whenever there's a problem that involves danger, distant lands, and mysterious beasts, she's the first to help. She's bold. She's brave. She's also a bit proud and mischievous -- but wouldn't you be too if you were the fastest Pegasus around? </p>";
        break;
    
        case "Saturday":
            $pony = "<h2> Saturday's... Pony? of the day is Spike! </h2>";
            $pic = "images/spike.png";
            $alt = "Spike";
            $color = "#50C356";
            $content = "<p> Twilight Sparkle adopted Spike the dragon when he was just an orphaned egg. He's been her faithful sidekick ever since. When he's not helping with her studies, Spike might be found eating gems. He doesn't know much about dragon culture, but he has an unexplainable ability to send and receive messages between his friends and Princess Celestia ... when he burps! </p>";
        break;
    }

?>

    <div id="wrapper">

        <div id="main-aside">
        <h1 style="background-color: <?php echo $color;?>; box-shadow: 0px 0px 15px 15px <?php echo $color;?>;"> Pony of the day! </h1>

        <div id="potd-display"  style="box-shadow: 0px 0px 15px 15px <?php echo $color;?>; background-color: <?php echo $color;?>;">
            <?php echo $pony; ?>
            <img id="potd-image" src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        </div> <!-- End "potd-display". -->


        
        <div id="potd-description">
            <?php echo $content; ?>

            <br>

            <h3> Other Ponies of the Day...</h3>

            <ul>
                <li> <a href="daily.php?today=Sunday"> ◊ Sunday </a> </li>
                <li> <a href="daily.php?today=Monday"> ◊ Monday </a> </li>
                <li> <a href="daily.php?today=Tuesday"> ◊ Tuesday </a> </li>
                <li> <a href="daily.php?today=Wednesday"> ◊ Wednesday </a> </li>
                <li> <a href="daily.php?today=Thursday"> ◊ Thursday </a> </li>
                <li> <a href="daily.php?today=Friday"> ◊ Friday </a> </li>
                <li> <a href="daily.php?today=Saturday"> ◊ Saturday </a> </li>
            </ul>
        </div><!-- End "potd-description". -->

        </div> <!-- End "main-aside" -->

    </div> <!-- End "wrapper". -->

<?php
include("includes/footer.php"); // Appends the footer HTML that we have stored in a different file. This makes it easy to repeat elements that show up a lot. :)
?>