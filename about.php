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
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" href="images/favicon.ico">
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
                    <div class="dynamic-title">კომპანიის შესახებ</div>
                    <div class="content">
                        <section class="parallax-section">
                            <div class="parallax-inner">
                                <div class="bg" data-bg="images/bg/2.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-6 about_title">
                                            <h2>კომპანიის <strong> შესახებ </strong></h2>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="content">
                        <section id="sec1">
                            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>01</span></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 about_cl">
                                        <h2 class="section-title">კომპანია <strong>დემაქს ჯგუფი</strong></h2>
                                        <p>
                                        <?php 

                                            $queryAbout = "SELECT * FROM about";
                                            $runAbout   = mysqli_query($conn,$queryAbout);

                                            while ($rowAbout = mysqli_fetch_array($runAbout)) {
                                                $about = $rowAbout['about'];
                                                echo $about;
                                            }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
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