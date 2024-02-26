<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="css/styles.css" type="text/css" rel="stylesheet"> -->
    <!-- Leaving below in for myself when I'm having cache issues... -->
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title> <?php echo $title; ?></title>
</head>

<body class="<?php echo $body; ?>">

<header>
    <div class="inner-header">

        <a href="index.php">
            <img id="logo" src="images/logo.png" alt="The elephant PHP logo, edited with a purple-and-pink theme.">
        </a>

        <nav>  
            <ul>
            <?php echo make_links($nav); // From config.php. ?>
            </ul>
        </nav>

    </div> <!-- End "inner-header". -->
</header>

<div id="hero">
            <img src="images/star-divider.gif" alt="Twinkling pink stars!" class="divider-img">
            <img src="images/star-divider.gif" alt="Twinkling pink stars!" class="divider-img">
            <img src="images/star-divider.gif" alt="Twinkling pink stars!" class="divider-img">
</div> <!-- End "hero". -->