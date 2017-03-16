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
            <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            include 'admin/db.php';
            $post_id = $_GET['post_id'];
            $floor_id = $_GET['floor_id'];

            $query = "SELECT * FROM projects_floors WHERE id = '$floor_id'";
            $run   = mysqli_query($conn,$query);

            while($row = mysqli_fetch_array($run)){
                $floor_name  = $row['floor_name'];
                $coordinates = $row['coordinates'];
                $floor_image = $row['image'];
                $projectID   = $row['projectID']; 
            }

            $query22 = "SELECT * FROM projects WHERE id = '$post_id'";
            $run22   = mysqli_query($conn,$query22);

            while($rowP  = mysqli_fetch_array($run22)){
                $proName  = $rowP['name'];
                $proImage = $rowP['image']; 
                $id       = $rowP['id'];
                $about    = $rowP['about'];
            }
        ?>
        <div class="loader">
            <div id="movingBallG">
                <div class="movingBallLineG"></div>
                <div id="movingBallG_1" class="movingBallG"></div>
            </div>
        </div>
        <div id="main">
        <?php include 'header.php';?>
            <div id="wrapper" class="pr_sngl_wrp">
                <div class="content-holder">
                    <div class="dynamic-title"><?php echo $proName;?></div>
                    <div class="content">
                        <section class="parallax-section">
                            <div class="parallax-inner">
                                <div class="bg" data-bg="images/bg/1.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-12 about_title">
                                            <h2><?php echo $floor_name;?> <strong>-  <?php echo $proName;?> </strong></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="content">
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="section-title algn-right dec-title"><span><?php echo $proName;?> -<strong> <?php echo $floor_name;?></strong></span></h2>
                                    </div>

                                <div class="fade-me">
                                    <div class="container">                               
                                        <div class="col-md-12 calc_top_wrp">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>ბინის თანხა</label>
                                                    <input type="number" name="flatprice" class="form-control" id="flatprice">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>სესხის პროცენტი (11 %)</label>
                                                    <input type="number" name="flatpercent" id="flatpercent" class="form-control" value="11" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>ვადა (თვე)</label>
                                                    <input type="number" name="loanperiod" class="form-control" id="loanperiod">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>თვეში გადასახადი (თანხა)</label>
                                                    <input type="text" name="monthamount" class="form-control" id="monthamount" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="submit" class="btn brn-primary buti" id="submita" value="დათვლა">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                     <div class="right_side">
                                        <div class="calculator_wrp">
                                            <i class="fa fa-calculator" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                       <div class="col-md-12 flats_count_wrp">
                                        <div class="">
                                          გთხოვთ აირჩიოთ ფართი
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <map name="building-map">
                                                <?php

                                                    $query3 = "SELECT * FROM projects_flats WHERE floorID = '$floor_id'";
                                                    $run3   = mysqli_query($conn,$query3);

                                                    if(mysqli_num_rows($run3)>=1){
                                                        while($row3 = mysqli_fetch_array($run3)){
                                                            $fl_id       = $row3['id'];
                                                            $fl_name     = $row3['flat_name'];
                                                            $coordinates = $row3['coordinates'];
                                                            echo '<area href="projects_floor.php?floor_id='.$fl_id.'&post_id='.$post_id.'" shape="poly" coords="'.$coordinates.'" id="'.$fl_id.'" title="'.$fl_name.'" class="floor">';
                                                        }
                                                    }

                                                ?>
                                                
                                            </map>
                                            <img src="imgs/projects_maps/<?php echo $floor_image;?>" width="430" height="430" class="building-image" usemap="#building-map" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="content">
                        <section>
                            <div class="container">
                                <div class="col-md-12">
                                    <h2 class="section-title algn-left dec-title"><span><strong>გალერეა</strong></span></h2>
                                </div>

                                <div class="gallery-items three-columns grid-small-pad lightgallery">
                                    <?php 
                                        $queryGallery = "SELECT * FROM projectspictures WHERE projectID = '$post_id'";
                                        $runGallery   = mysqli_query($conn,$queryGallery);

                                        while($rowGallery = mysqli_fetch_array($runGallery)){
                                            $gallPic = $rowGallery['image'];
                                            echo '
                                            <div class="gallery-item">
                                                <div class="grid-item-holder">
                                                    <div class="box-item">
                                                        <a data-src="imgs/galery/'.$gallPic.'" class="popup-image" data-sub-html="alteration in some">
                                                        <span class="overlay"></span> 
                                                        <img  src="imgs/galery/'.$gallPic.'"   alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>';

                                        }
                                    ?>
                                    <?php 
                                        $queryGalleryV = "SELECT * FROM projectsvideos WHERE projectID = '$post_id'";
                                        $runGalleryV   = mysqli_query($conn,$queryGalleryV);

                                        while($rowGalleryV = mysqli_fetch_array($runGalleryV)){
                                            $gallVid   = $rowGalleryV['videoURL'];
                                            $youtubeID = substr(ltrim($gallVid),32); 
                                            echo '
                                            <div class="gallery-item">
                                                <div class="grid-item-holder">
                                                    <div class="box-item">
                                                        <iframe width="100%" height="227px" src="https://www.youtube.com/embed/'.$youtubeID.'" frameborder="0" allowfullscreen></iframe>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>';

                                        }
                                    ?>
                                </div>
                                <!-- end gallery items -->               
                                <div class="custom-inner-holder">
                                    <!-- 1 -->	
                                    <div class="custom-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="section-title algn-left dec-title"><span><strong>პროექტის აღწერა</strong></span></h2>
                                            </div>
                                            <div class="col-md-12 pr_desc_wrp">
                                                <?php echo $about;?>
                                            </div>
                                        </div>
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
        <script type="text/javascript" src="public/js/drawer.js"></script>
        <script type="text/javascript" src="api.js"></script>

    <script>
        window.onload = clear_canvas();
    </script>
    <script type="text/javascript" src="http://demax.ge/public/js/jquery.maphilight.js"></script>

    <script type="text/javascript">
        $('.building-image').maphilight();
    </script>
    </body>
</html>