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
                    <div class="dynamic-title">მენეჯმენტი</div>
                    <div class="content">
                        <section class="parallax-section">
                            <div class="parallax-inner">
                                <div class="bg" data-bg="images/bg/2.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-6 about_title"">
                                            <h2>ჩვენი <strong>  გუნდი </strong></h2>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="content tm_cont">
                        <section>
                            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>01</span></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="section-title  dec-title"><span>კომპანია  <strong> დემაქს ჯგუფი</strong></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="team-holder">
                                            <?php 
                                                include 'admin/db.php';
                                                $query = "SELECT * FROM team";
                                                $run   = mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_array($run)){
                                                    $id          = $row['id'];
                                                    $empName     = $row['empName'];
                                                    $empPosition = $row['empPosition'];
                                                    $empImage    = $row['empImage'];

                                                    if($id % 2 == 1 ){
                                                        echo '
                                                            <li>
                                                                <div class="team-box" data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);">
                                                                    <div class="team-photo">
                                                                        <div class="overlay"></div>
                                                                        <img src="imgs/employees/'.$empImage.'" alt="" class="respimg">                              
                                                                    </div>
                                                                    <div class="team-info">
                                                                        <h3>'.$empName.'</h3>
                                                                        <h4>'.$empPosition.'</h4>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        ';
                                                    }else{
                                                        echo '
                                                            <li>
                                                                <div class="team-box" data-top-bottom="transform: translateY(100px);" data-bottom-top="transform: translateY(-100px);">
                                                                    <div class="team-photo">
                                                                        <div class="overlay"></div>
                                                                        <img src="imgs/employees/'.$empImage.'" alt="" class="respimg">                              
                                                                    </div>
                                                                    <div class="team-info">
                                                                        <h3>'.$empName.'</h3>
                                                                        <h4>'.$empPosition.'</h4>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        ';
                                                    }                                                

                                                }

                                            ?>
                                        
                                        </ul>   	
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="height-emulator"></div>
                    <?php include 'footer.php';?>
                </div>
            </div>
            <?php include 'fixed_footer.php';?>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>