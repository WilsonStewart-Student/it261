<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time(); ?>">
    <title> <?php echo $title; ?> </title>
</head>

<body class="<?php echo $body; ?>">
 
    <header>
        <div id="inner-header">
            <nav>  
                <ul>
                <li> <a href="index.php"> <img src="img/pillar-planet.png" alt="The 3D logo for Pillar Planet."> </a> </li>
                <?php echo make_links($nav); // From config.php. ?>
                </ul>
            </nav>
        </div> <!-- End "inner-header". -->
    </header>

    <!-- Visual effect div: -->
    <div id="sky"> </div>