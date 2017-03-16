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