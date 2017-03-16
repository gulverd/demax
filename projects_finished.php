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
                    <div class="dynamic-title">პროექტები</div>
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
                                            <h2>დასრულებული <strong> პროექტები </strong></h2>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="content">
                        <section>
                            <div class="container">
                                <div class="gallery-items   three-columns grid-small-pad ">
                                   <!--  <div class="gallery-item  interior houses construction">
                                        <div class="grid-item-holder">
                                            <img  src="images/folio/thumbs/2.jpg"    alt="">
                                            <div class="port-desc-holder">
                                                <div class="port-desc">
                                                    <div class="grid-item">
                                                        <h3><a href="portfolio-single.html">Quisque non augue</a></h3>
                                                        <span>Photography /    Interior</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gallery-item  gallery-item-second  interior">
                                        <div class="grid-item-holder">
                                            <img  src="images/folio/thumbs/1.jpg" alt="">
                                            <div class="port-desc-holder">
                                                <div class="port-desc">
                                                    <div class="grid-item">
                                                        <h3><a href="portfolio-single.html">Tincidunt ornare</a></h3>
                                                        <span>Photography /    wood</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <?php 
                                        $queryP = "SELECT * FROM projects where status = 2 ORDER BY id DESC";
                                        $runP   = mysqli_query($conn,$queryP);

                                        while($rowP = mysqli_fetch_array($runP)){
                                            $proName  = $rowP['name'];
                                            $proImage = $rowP['image']; 
                                            $id       = $rowP['id'];

                                                echo '
                                                    <div class="gallery-item  design interior">
                                                     <a href="projects_single.php?post_id='.$id.'">   <div class="grid-item-holder">
                                                            <img src="imgs/projects/'.$proImage.'" alt="" class="prjs">
                                                            <div class="port-desc-holder">
                                                                <div class="port-desc">
                                                                    <div class="grid-item">
                                                                        <h3><a href="projects_single.php?post_id='.$id.'">'.$proName.'</a></h3>
                                                                        <span>იხილეთ პროექტი</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    ';
                                        }

                                    ?>
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