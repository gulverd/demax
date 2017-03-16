                    <div class="content">
                        <section id="sec1">
                            <!-- section number   -->
                            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>01</span></div>
                            <!-- section number  end  -->
                            <!--  container  --> 
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- single slider  -->
                                        <div class="parallax-box slider-box ">
                                            <div class="single-slider-holder">
                                                <div class="single-slider">
                                                    <!-- 1 -->
                                                    <div class="item">
                                                        <img src="images/folio/slider/about1.jpg" alt="">
                                                    </div>
                                                    <!-- 1 end-->
                                                    <!-- 2 -->
                                                    <div class="item">
                                                        <img src="images/folio/slider/about2.jpg" alt="">
                                                    </div>
                                                    <!-- 2 end-->
                                                    <!-- 3 -->                                     	
                                                    <div class="item">
                                                        <img src="images/folio/slider/about3.jpg" alt="">
                                                    </div>
                                                    <!-- 3 end  -->
                                                </div>
                                                <div class="customNavigation ssn">
                                                    <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                                    <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- single slider  end -->
                                        </div>
                                    </div>
                                    <div class="col-md-8 sec_about">
                                        <!-- section title  -->
                                        <h2 class="section-title">კომპანია <strong>დემაქს ჯგუფი</strong></h2>
                                        <!-- section title  end -->
                                        <p>
                                        <?php 

                                            $queryAbout = "SELECT * FROM about";
                                            $runAbout   = mysqli_query($conn,$queryAbout);

                                            while ($rowAbout = mysqli_fetch_array($runAbout)) {
                                                $about = $rowAbout['about'];
                                                $less  = substr($about,3,2673);
                                                echo $less . '...';
                                            }


                                        ?>
                                        </p>
                                        <a href="about.php" class="btn anim-button fl-l"><span>იხილეთ ვრცლად</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--  container end  -->  
                        </section>
                    </div>