<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> Wilson's Portal Page </title>
</head>

<body>
    <div id="background">


    <header>   
        <div id="inner-header"> 

        <h1> <a href="index.php"> Wilson's Portal Page... </a> </h1>

        <br> 

        <nav>
            <ul>
                <li> <a href="website/daily.php"> Switch </a> </li>
                <li> ☼ </li>
                <li> <a href="weeks/week4/adder.php"> Troubleshoot </a> </li>
                <li> ☼ </li>
                <li> <a href="weeks/week5/calculator.php"> Calculator </a> </li>
                <li> ☼ </li>
                <li> <a href="website/contact.php"> Email </a> </li>
                <li> ☼ </li>
                <li> <a href=""> Database </a> </li>
                <li> ☼ </li>
                <li> <a href="website/gallery.php"> Gallery </a> </li>
            </ul>
        </nav>  

        </div> <!-- End "inner-header". -->
    </header>

    
    <div id="wrapper">

        <main>
            <h1> About Wilson </h1>
            <br>
            <img id="wilson-image" src="images/wilson.png" alt="A picture of Wilson, edited to fit the site's color scheme.">
            <p> Hi, I'm Wilson! I'm a new student at Seattle Central College (having been a Running Start student previously) and I'm hoping to get an Associate of Applied Science degree focusing on Web Development. While I have some experience in web design, due to previously taking IT 161 and creating my own websites for fun, I have a lot to learn when it comes to the more technical side of development, and I'm excited to do so. Some of the other things I like to do include digital art (both 2D and 3D) and playing video games. My favorite game is, and probably always will be, Minecraft. ☻ </p>
            <br>
            <h3> HW #1 </h3>
            <br>
            <img src="images/mamp-localhost.png" alt="An image displaying that MAMP is installed, with Wilson's name visible.">
            <img src="images/php-error.png" alt="An image showing a PHP error.">
        </main>

        <aside>
            <h3> Weekly Class Exercises </h3>
            <br>
            <h3> Week 1 </h3>
            <p> ► N/A </p>
            <br>
            <h3> Week 2 </h3>
            <p> <a href="weeks/week2/var.php"> ► var.php </a> </p>
            <p> <a href="weeks/week2/vars2.php"> ► vars2.php </a> </p>
            <p> <a href="weeks/week2/currency-logic.php"> ► currency-logic.php </a> </p>
            <p> <a href="weeks/week2/currency.php"> ► currency.php </a> </p>
            <p> <a href="weeks/week2/heredoc.php"> ► heredoc.php </a> </p>
            <br>
            <h3> Week 3 </h3>
            <p> <a href="weeks/week3/if.php"> ► if.php </a> </p>
            <p> <a href="weeks/week3/date.php"> ► date.php </a> </p>
            <p> <a href="weeks/week3/for-each.php"> ► for-each.php </a> </p>
            <p> <a href="weeks/week3/index.php"> ► index.php </a> </p>
            <p> <a href="weeks/week3/for-loop.php"> ► for-loop.php </a> </p>
            <p> <a href="weeks/week3/switch.php"> ► switch.php </a> </p>
            <br>
            <h3> Week 4 </h3>
            <p> <a href="weeks/week4/form-get.php"> ► form-get.php </a> </p>
            <p> <a href="weeks/week4/form1.php"> ► form1.php </a> </p>
            <p> <a href="weeks/week4/form2.php"> ► form2.php </a> </p>
            <p> <a href="weeks/week4/form3.php"> ► form3.php </a> </p>
            <p> <a href="weeks/week4/arithmetic-form.php"> ► arithmetic-form.php </a> </p>
            <p> <a href="weeks/week4/celcius.php"> ► celcius.php </a> </p>
            <!-- <p> <a href="weeks/week4/adder.php"> ► adder.php </a> </p> (Moved to the HW area, whoops.) -->
            <br>
            <h3> Week 5 </h3>
            <p> <a href="weeks/week5/currency1.php"> ► currency1.php </a> </p>
            <p> <a href="weeks/week5/currency2.php"> ► currency2.php </a> </p>
            <p> <a href="weeks/week5/currency3.php"> ► currency3.php </a> </p>
            <p> <a href="weeks/week5/currency4.php"> ► currency4.php </a> </p>
            <p> <a href="weeks/week5/null.php"> ► null.php </a> </p>
            <br>
            <h3> Week 6 </h3>
            <p> <a href="weeks/week6/form.php"> ► form.php </a> </p>
            <p> <a href="weeks/week6/form2.php"> ► form2.php </a> </p>
            <p> <a href="weeks/week6/functions.php"> ► functions.php </a> </p>
            <br>
            <h3> Week 7 </h3>
            <p> <a href="weeks/week7/form3.php"> ► form3.php </a> </p>
            <p> <a href="weeks/week7/strings.php"> ► strings.php </a> </p>
            <p> <a href="weeks/week7/pictures.php"> ► pictures.php </a> </p>
            <p> <a href="weeks/week7/rand.php"> ► rand.php </a> </p>
            <br>
            <h3> Week 8 </h3>
            <p> <a href="weeks/week8/people.php"> ► people.php </a> </p>
        </aside>

    </div> <!-- End "wrapper". -->


    <footer>
        <ul>
            <li>Copyright © 2024</li>
            <li>All Rights Reserved</li>
            <li> <a href="index.php"> Web Design by Wilson </a> </li>
            <li> <a id="html-checker" href="#"> HTML Validation </a></li>
            <li> <a id="css-checker" href="#"> CSS Validation </a> </li>
            </ul>
    </footer>

    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>


    </div> <!-- End "background" -->
</body>

</html>