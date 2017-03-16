<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Demax Group</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include 'admin/db.php';?>
        <div class="loader">
            <div id="movingBallG">
                <div class="movingBallLineG"></div>
                <div id="movingBallG_1" class="movingBallG"></div>
            </div>
        </div>
        <div id="main">
            <?php include 'header.php';?>	
            <div id="wrapper">
                <div class="content-holder">
                    <div class="dynamic-title"><a href="index.php">მთავარი გვერდი</a></div>
                    <?php 
                        include 'slider.php';
                        include 'section1.php';
                        include 'interesting.php';
                        include 'featured.php';
                    ?>      
                    <div class="height-emulator"></div>
                    <?php 
                        include 'footer.php'; 
                    ?>
                </div>
            </div>
            <?php 
                include 'fixed_footer.php';
            ?>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>