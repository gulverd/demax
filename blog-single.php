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


        <?php
            include 'admin/db.php';
            $post_id = $_GET['post_id'];

            $query1  = "SELECT * FROM blog WHERE id = '$post_id'";
            $run1    = mysqli_query($conn,$query1);
            while($row1 = mysqli_fetch_array($run1)){
                $id1    = $row1['id'];
                $url    = 'blog-single.php?post_id='.$id1;
                $title1 = $row1['title'];
                $text1  = $row1['texta'];
                $img1   = $row1['img'];
                $image  = 'http://demax.ge/test/imgs/blog/'.$img1;            
            }
        ?>

        <meta property="og:url"           content="<?php echo $url;?>" />
        <meta property="og:type"          content="http://demax.ge/" />
        <meta property="og:title"         content="<?php echo $title1;?>" />
        <meta property="og:description"   content="<?php echo $text1;?>" />
        <meta property="og:image"         content="<?php echo $image;?>" />
        <meta property="og:image:type"    content="image/jpeg" />
        <meta property="og:image:width"   content="1200" />
        <meta property="og:image:height"  content="630" />

    </head>
    <body>

        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '220248188400044',
              xfbml      : true,
              version    : 'v2.8'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>

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

                                            $query  = "SELECT * FROM blog WHERE id = '$post_id'";
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
                                                                <div class="fb-share-button" data-href="'.$url.'" data-layout="button_count">
                                                                </div>
                                                                <div class="blog-media">
                                                                    <div class="single-slider-holder">
                                                                        <img src="imgs/blog/'.$img.'" alt="" id="blog_pic">
                                                                    </div>
                                                                </div>
                                                                <div class="blog-text">
                                                                    <p>
                                                                       '.$text.'
                                                                    </p>
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
                                                        $run2   = mysqli_query($conn,$query2);

                                                        while($row2 = mysqli_fetch_array($run2)){
                                                            $blogid    = $row2['id'];
                                                            $blogtitle = $row2['title'];
                                                            $blogdate  = $row2['blog_date'];
                                                            $blogpic   = $row2['img'];

                                                            echo '
                                                            <li class="clearfix">
                                                                <a href=""  class="widget-posts-img"><img src="imgs/blog/'.$blogpic.'" class="respimg" alt=""></a>
                                                                <div class="widget-posts-descr">
                                                                    <a href="blog-single.php?'.$blogid.'">'.$blogtitle.'</a>
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
