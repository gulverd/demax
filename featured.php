                    <div class="content cl_ftrd_cont">
                        <section>
                            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>03</span></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="section-title algn-right dec-title"><span><strong> პროექტები</strong></span></h2>
                                    </div>
                                </div>

                                <?php 
                                    $queryP = "SELECT * FROM projects ORDER BY id DESC LIMIT 3";
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





                                <div class="custom-link-holder">
                                    <a href="projects_all.php" class="btn anim-button"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>იხილეთ ყველა პროექტი</span><i class="fa fa-long-arrow-right"></i></a>	
                                </div>
                            </div>
                        </section>
                    </div>