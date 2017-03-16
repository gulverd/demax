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
        <div id="main" class="conti">
            <?php include 'header.php';?>
            <div id="wrapper">
                <div class="content-holder">
                    <div class="dynamic-title">კონტაქტი</div>
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
                                            <h2>საკონტაქტო <strong> ინფორმაცია </strong></h2>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <?php
                    
                        include 'admin/db.php';

                        $query = "SELECT * FROM contact";
                        $run   = mysqli_query($conn,$query);

                        while($row = mysqli_fetch_array($run)){
                            $companyName    = $row['companyName'];
                            $companyAddress = $row['companyAddress'];
                            $companyPhone   = $row['companyPhone'];
                            $companyMob1    = $row['companyMob1'];
                            $companyMob2    = $row['companyMob2'];
                            $companyEmail1  = $row['companyEmail1'];
                            $companyEmail2  = $row['companyEmail2'];
                            $facebook       = $row['facebook'];
                            $twitter        = $row['twitter'];
                            $instagram      = $row['Instagram'];
                            $pinterest      = $row['pinterest'];
                            $youtube        = $row['youtube']; 
                            $mapx           = $row['mapx'];
                            $mapy           = $row['mapy'];
                        }

                    ?>
                    <div class="content">
                        <section>
                        <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>01</span></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="section-title">კომპანია <strong><?php echo $companyName;?></strong></h2>
                                    </div>   
                                </div>
                                <div class="map-box">
                                    <div id="map-canvas"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="contact-details">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3 class="bold-title">დაგვიკავშირდით: </h3>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4><?php echo $companyAddress;?></h4>
                                                    <ul>
                                                        <li><a href="#"><?php echo $companyEmail1;?></a></li>
                                                        <li><a href="#"><?php echo $companyEmail2;?></a></li>
                                                        <li><a href="#"><?php echo $companyPhone;?></a></li>
                                                        <li><a href="#"><?php echo $companyMob1;?></a></li>
                                                        <li><a href="#"><?php echo $companyMob2;?></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4>სოციალური ქსელები: </h4>
                                                    <ul>
                                                        <li><a href="<?php echo $facebook;?>" target="-blank">Facebook</a></li>
                                                        <li><a href="<?php echo $instagram;?>" target="-blank">Instagram</a></li>
                                                        <li><a href="<?php echo $youtube;?>" target="-blank">Youtube</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 contactforma">
                                                        
                                                        <div class="contact-form-holder">
                                                            <div id="contact-form">
                                                                <div id="message"></div>
                                                                    <form method="post" action="">
                                                                        <input name="fname" type="text" id="fname"  placeholder="სახელი">
                                                                        <input name="lname" type="text" id="lname"  placeholder="გვარი">
                                                                        <input name="phone" type="text" id="phone"  placeholder="ტელეფონის ნომერი">
                                                                        <input name="email" type="text" id="email"  placeholder="ელ-ფოსტა">            
                                                                        <textarea name="comments"  id="comments"    placeholder="ტექსტი"></textarea>  
                                                                        <input type="submit" class="btn butia" data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);" name="submita" value="გაგზავნა">
                                                                    </form>
                                                            </div>
                                                        </div>

                                                </div>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIqB_LyVdTlqAcPH5cU4ZJUDGzOwilb2s" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
    </body>
</html>


<?php
    
    if(isset($_POST['submita'])){

        require "phpmailer/class.phpmailer.php";

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $text  = $_POST['comments'];

        $message = 'From:' . ' ' . $fname . ' ' . $lname .'</br>'. 'Email: ' . $email . '</br>'. 'Phone :' . $phone . '</br>' .'Message: '.'</br>'. $text . '</br>'; 

        
          // Instantiate Class  
                    $mail = new PHPMailer();  
                      
                    // Set up SMTP  
                    $mail->IsSMTP();                // Sets up a SMTP connection  
                    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
                    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
                    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
                    $mail->Port = 465;  //Gmail SMTP port
                    $mail->Encoding = '7bit';
                    $mail->CharSet = "UTF-8";
                    
                    // Authentication  
                    $mail->Username   = "demaxmailer@gmail.com"; // Your full Gmail address
                    $mail->Password   = "demax2016"; // Your Gmail password
                       
                    // Composey
                    $mail->From = 'demaxmailer@gmail.com';
                    $mail->FromName = 'Demax Mailer';
                    $mail->addAddress('info@demax.ge');               // Name is optional
                    $mail->Subject = "Contact Form";      // Subject (which isn't required)  
                    $mail->MsgHTML($message);

                    $result = $mail->Send();    // Send!  
                    $message = $result ? 'წარმატებით გაიგზავნა!' : 'გაგზავნა ვერ მოხერხდა!';      
                    unset($mail);

                    if($message){
                        echo "<script> 
                            window.alert('მოთხოვნა წარმატებით გაიგზავნა!');
                          </script>";
                    }else{
                        echo "<script> 
                            window.alert('შეტყობინების გაიგზავნა ვერ მოხერხდა!');
                            window.location.assign('contact.php')
                          </script>";
                    }

    }

?>
