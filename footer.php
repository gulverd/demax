                    <?php
                        include 'admin/db.php';

                        $querya = "SELECT * FROM contact";
                        $runa   = mysqli_query($conn,$querya);

                        while($rowa = mysqli_fetch_array($runa)){
                            $companyName    = $rowa['companyName'];
                            $companyAddress = $rowa['companyAddress'];
                            $companyPhone   = $rowa['companyPhone'];
                            $companyMob1    = $rowa['companyMob1'];
                            $companyMob2    = $rowa['companyMob2'];
                            $companyEmail1  = $rowa['companyEmail1'];
                            $companyEmail2  = $rowa['companyEmail2'];
                            $facebook       = $rowa['facebook'];
                            $twitter        = $rowa['twitter'];
                            $instagram      = $rowa['instagram'];
                            $pinterest      = $rowa['pinterest'];
                            $youtube        = $rowa['youtube']; 
                            $mapx           = $rowa['mapx'];
                            $mapy           = $rowa['mapy'];
                        }

                    ?>

                    <footer class="content-footer">
                        <!--  container  --> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Footer logo --> 
                                    <div class="footer-item footer-logo">
                                        <a href="index.php"><img src="images/footer-logo.png" alt=""></a>
                                        <p>სამშენებლო დეველოპერული კომპანია „დემაქს ჯგუფი"-ს  საქმიანობის ძირითადი მიმართულებაა დეველოპერული, სამშენებლო-სარემონტო სამუშაოების შესრულება, ჩვენი მთავარი ორიენტირი ხარისხია.</p>
                                    </div>
                                    <!-- Footer logo end --> 
                                </div>
                                <!-- Footer info --> 
                                <div class="col-md-2">
                                    <div class="footer-item">
                                        <h4 class="text-link">დაგვირეკეთ</h4>
                                        <ul>
                                            <li><a href="#"><?php echo $companyMob1;?></a></li>
                                            <li><a href="#"><?php echo $companyMob2;?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer info end--> 
                                <!-- Footer info --> 
                                <div class="col-md-2">
                                    <div class="footer-item">
                                        <h4 class="text-link">მოგვწერეთ</h4>
                                        <ul>
                                            <li><a href="#"><?php echo $companyEmail1;?></a></li>
                                            <li><a href="#"><?php echo $companyEmail2;?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer info-->
                                <!-- Footer info end--> 
                                <div class="col-md-2">
                                    <div class="footer-item">
                                        <h4 class="text-link">მისამართი</h4>
                                        <ul>
                                            <li><span class="footer_sp"><?php echo $companyAddress;?></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer info end--> 
                            </div>
                            <!-- Footer copyright -->
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="footer-wrap">
                                        <span class="copyright">  &#169; Demax <?php echo date('Y');?> 
                                        </span>
                                        <span class="to-top">To Top</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer copyright end -->
                        </div>
                        <!--  container  end --> 
                        <!-- Hover animation  -->
                        <canvas class="particular"></canvas>
                        <!-- Hover animation  end -->
                    </footer>