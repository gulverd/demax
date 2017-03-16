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

            $query = "SELECT * FROM projects WHERE id = '$post_id'";
            $run   = mysqli_query($conn,$query);

            while($rowP  = mysqli_fetch_array($run)){
                $proName    = $rowP['name'];
                $proImage   = $rowP['image']; 
                $id         = $rowP['id'];
                $about      = $rowP['about'];
                $additional = $rowP['additional'];
                $map        = $rowP['map'];
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
                                            <h2><strong> <?php echo $proName;?> </strong></h2>
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
                                        <h2 class="section-title algn-right dec-title"><span><strong><?php echo $proName;?></strong></span></h2>
                                    </div>

                                    <?php include 'calculator.php';?>

                                    <div class="right_side">
                                        <div class="calculator_wrp">
                                            <i class="fa fa-calculator" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12 flats_count_wrp">
                                        <?php 

                                            $queryFlats = "SELECT count(*) as count FROM projects_flats WHERE projectID = '$post_id'";
                                            $runFlats   = mysqli_query($conn,$queryFlats);

                                            while($rowFlats = mysqli_fetch_array($runFlats)){
                                                $count  = $rowFlats['count'];
                                                //echo $count;
                                            }

                                            $queryFlats2 = "SELECT count(*) as statusa FROM projects_flats WHERE projectID = '$post_id' AND status = 2";
                                            $runFlats2   = mysqli_query($conn,$queryFlats2);

                                            while($rowFlats2 = mysqli_fetch_array($runFlats2)){
                                                $status  = $rowFlats2['statusa'];
                                                //echo  '</br>'. $status;
                                            }                                           


                                            if($count == 0){
                                                $progress  = 100;
                                                $statement = 'ყველა ბინა გაყიდულია!';
                                                $flatsCountStatement = '';
                                            }else{
                                                
                                                $flats     = $count - $status;
                                                $flatsCountStatement = 'ბინების რაოდენობა: '. $count;

                                                $progress  = $status / $count * 100;
                                                

                                                $statement = 'დარჩენილია ' .$flats. ' ბინა';
                                            }

                                        ?>
                                        <div class="">
                                           <?php echo $flatsCountStatement;?>
                                        </div>
                                        <div class="">
                                            <?php echo $statement;?>
                                        </div>
                                        <div class="progressa">
                                            <div class="flats-box">
                                                <span style="left: 0%;">
                                                </span>
                                                <div class="prg" style="left: <?php echo $progress;?>%;">
                                                    
                                                </div>
                                                <span style="left:100%;">
                                                </span>
                                            </div>
                                        </div>





                                    </div>
                                </div>

                                <div class="row">
                                    <div class="zazaza">
                                       
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <map name="building-map">
                                                <?php

                                                    $query3 = "SELECT * FROM projects_floors WHERE projectID = '$post_id'";
                                                    $run3   = mysqli_query($conn,$query3);

                                                    if(mysqli_num_rows($run3)>=1){
                                                        while($row3 = mysqli_fetch_array($run3)){
                                                            $fl_id       = $row3['id'];
                                                            $fl_name     = $row3['floor_name'];
                                                            $coordinates = $row3['coordinates'];
                                                            $flooor_img  = $row3['image'];

                                                            echo '<area imga="imgs/projects_maps/'.$flooor_img.'" shape="poly" coords="'.$coordinates.'" id="'.$fl_id.'" class="fla" title="'.$fl_name.'">';
                                                            
                                                            //projects_floor.php?floor_id='.$fl_id.'&post_id='.$post_id.'
                                                            //href="imgs/projects_maps/'.$flooor_img.'"

                                                        }
                                                    }

                                                ?>
                                            </map>
                                            <img src="imgs/projects/<?php echo $proImage;?>" width="430" height="430" class="building-image" usemap="#building-map" />
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <h2 class="section-title algn-left dec-title"><span><strong>პროექტის აღწერა</strong></span></h2>
                                </div>
                                <div class="col-md-12 pr_desc_wrp">
                                    <?php echo $about;?>
                                </div>

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

                                <div class="col-md-12">
                                    <h2 class="section-title algn-left dec-title"><span><strong>დამატებითი ინფორმაცია</strong></span></h2>
                                </div>
                                <div class="col-md-12 pr_desc_wrp">
                                    <?php echo $additional;?>
                                </div>       
                                <div class="col-md-12">
                                    <h2 class="section-title algn-left dec-title"><span><strong>ადგილმდებარეობა</strong></span></h2>
                                </div>
                                <div class="col-md-12 pr_desc_wrp">
                                    <?php echo $map;?>
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
        <script type="text/javascript" src="api.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIqB_LyVdTlqAcPH5cU4ZJUDGzOwilb2s" type="text/javascript"></script>

    <script>
        window.onload = clear_canvas();
    </script>
    <script type="text/javascript" src="admin/public/js/jquery.maphilight.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.building-image').maphilight();
    </script>

    </body>
</html>