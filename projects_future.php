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
                                            <h2>სამომავლო <strong> პროექტები </strong></h2>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                   <div class="content cl_ftrd_cont">
                        <section>
                            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>03</span></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="section-title algn-right dec-title"><span>დემაქს ჯგუფი<strong> პროექტები</strong></span></h2>
                                    </div>
                                </div>
                                <?php 
                                    $queryP = "SELECT * FROM projects WHERE status = 3 ORDER BY id";
                                    $runP   = mysqli_query($conn,$queryP);

                                    while($rowP = mysqli_fetch_array($runP)){
                                        $proName  = $rowP['name'];
                                        $proImage = $rowP['image']; 
                                        $id       = $rowP['id'];
                                        if($id % 2 == 1){
                                            echo '
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="parallax-item left-direction">
                                                            <div class="paralax-media">
                                                                <div class="paralax-wrap">
                                                                    <img src="imgs/projects/'.$proImage.'" class="respimg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-deck" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);">
                                                                <div class="parallax-deck-item">
                                                                    <h3><strong>'.$proName.'</strong></h3>
                                                                    <a href="projects_single.php?post_id='.$id.'" class="btn anim-button fl-l"><span>იხილეთ პროექტი</span><i class="fa fa-long-arrow-right"></i></a>                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5"></div>
                                                </div>

                                            ';
                                        }else{
                                            echo '
                                                <div class="row">
                                                    <div class="col-md-5"></div>
                                                    <div class="col-md-7">
                                                        <div class="parallax-item right-direction">
                                                            <div class="paralax-media">
                                                                <div class="paralax-wrap">  
                                                                    <img src="imgs/projects/'.$proImage.'" class="respimg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-deck" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);">
                                                                <div class="parallax-deck-item">
                                                                    <h3><strong>'.$proName.'</strong></h3>
                                                                    <a href="projects_single.php?post_id='.$id.'" class="btn anim-button fl-l"><span>იხილეთ პროექტი</span><i class="fa fa-long-arrow-right"></i></a>                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ';
                                        }
                                    }

                                ?>
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