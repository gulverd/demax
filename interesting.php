                    <?php 
                        $query  = "SELECT count(*) as count FROM projects";
                        $run    = mysqli_query($conn,$query);
                        
                        while($row = mysqli_fetch_array($run)){
                            $countBuildings = $row['count'];
                        }

                        $query1 = "SELECT count(*) as flats FROM projects_flats";
                        $run1   = mysqli_query($conn,$query1);

                        while($row1 = mysqli_fetch_array($run1)){
                            $flats  = $row1['flats'];
                        }


                        $query2 = "SELECT count(*) as flats2 FROM projects_flats WHERE status = 2";
                        $run2   = mysqli_query($conn,$query2);

                        while($row2 = mysqli_fetch_array($run2)){
                            $flats2  = $row2['flats2'];
                        }

                    ?>
                    <div class="content dark-bg statistic_wrp">
                        <!-- section number   -->
                        <div class="sect-subtitle left-align-dec" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);"><span>02</span></div>
                        <!-- section number   end -->                                       
                        <!-- parallax image  -->                        
                        <div class="parallax-inner">
                            <div class="bg" data-bg="images/bg/1.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                            <div class="overlay"></div>
                        </div>
                        <!-- parallax image  end -->  
                        <section>
                            <!--  container  --> 
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2 class="section-title">დექმაქს ჯგუფი <strong> ფაქტები</strong></h2>
                                    </div>
                                    <div class="col-md-8">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <!-- facts   -->  
                                        <div class="inline-facts-holder row">
                                            <!-- 1 -->
                                            <div class="inline-facts col-md-4 ">
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="<?php echo $countBuildings;?>" data-num="<?php echo $countBuildings;?>">0</div>
                                                    </div>
                                                </div>
                                                <h6>პროექტი</h6>
                                            </div>
                                            <!-- 3 -->
                                            <div class="inline-facts col-md-4">
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="<?php echo $flats + 207;?>" data-num="<?php echo $flats + 207;?>">0</div>
                                                    </div>
                                                </div>
                                                <h6>ბინების რაოდენობა</h6>
                                            </div>
                                            <!-- 3 -->
                                            <div class="inline-facts col-md-4">
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="<?php echo $flats+207-$flats2-203;?>" data-num="<?php echo $flats+207-$flats2-203;?>">0</div>
                                                    </div>
                                                </div>
                                                <h6>დარჩენილი ბინები</h6>
                                            </div>
                                        </div>
                                        <!-- facts   end --> 
                                    </div>
                                </div>
                            </div>
                            <!--  container  end --> 
                        </section>
                    </div>