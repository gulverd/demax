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
        <div id="main" class="conti">
            <?php include 'header.php';?>
            <div id="wrapper">
                <div class="content-holder">
                    <div class="dynamic-title">ბლოგი</div>
                    <div class="content">
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php

                                            $query  = "SELECT * FROM blog ORDER BY id DESC";
                                            $run    = mysqli_query($conn,$query);

                                            if(mysqli_num_rows($run) >=1){
                                                while($row = mysqli_fetch_array($run)){
                                                    $id         = $row['id']; 
                                                    $title      = $row['title'];
                                                    $text       = $row['texta'];
                                                    $img        = $row['img'];
                                                    $blog_date  = $row['blog_date'];


                                                    echo  '
                                                            <article>
                                                                <h2 class="section-title dec-title"><span>'.$title.'</span></h2>
                                                                <ul class="creat-list">
                                                                    <li><a href="#">'.$blog_date.'</a></li>
                                                                </ul>
                                                                <div class="blog-media">
                                                                    <div class="single-slider-holder">
                                                                        <img src="imgs/blog/'.$img.'" alt="" id="blog_pic">
                                                                    </div>
                                                                </div>
                                                                <div class="blog-text">
                                                                    <p>
                                                                       '. mb_substr($text,0,320).'...'.'
                                                                    </p>
                                                                    <a href="blog-single.php?post_id='.$id.'" class="btn"><span>იხილედ სრულად </span> <i class="fa fa-long-arrow-right"></i></a>
                                                                </div>
                                                            </article>

                                                    ';
                                                }
                                            }else{
                                                echo '<div class="alert alert-danger" role="alert">ამ დროისათვის არ არის გაკეთებული ჩანაწერები!</div>';
                                            }

                                        ?>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="sidebar">
                                            <div class="widget">
                                                <h3>ბოლო 10 პოსტი</h3>
                                                <ul class="widget-posts">

                                                    <?php 
                                                        $query2 = "SELECT * FROM blog ORDER BY id DESC LIMIT 10";
                                                        $run2   = mysqli_query($conn,$query);

                                                        while($row2 = mysqli_fetch_array($run2)){
                                                            $blogid    = $row2['id'];
                                                            $blogtitle = $row2['title'];
                                                            $blogdate  = $row2['blog_date'];
                                                            $blogpic   = $row2['img'];

                                                            echo '
                                                            <li class="clearfix">
                                                                <a href="blog-single.php?post_id='.$blogid.'"  class="widget-posts-img"><img src="imgs/blog/'.$blogpic.'" class="respimg" alt=""></a>
                                                                <div class="widget-posts-descr">
                                                                    <a href="blog-single.php?post_id='.$blogid.'">'.$blogtitle.'</a>
                                                                    <span class="widget-posts-date">'.$blogdate.'</span> 
                                                                </div>
                                                            </li>';
                                                        }

                                                    ?>
                                                                                                      
                                                </ul>
                                            </div>
                                        </div>
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
            <?php include 'fixed_footer.php';?>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
    </body>
</html>
