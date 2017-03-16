             <?php
                    include 'admin/db.php';

                    $query = "SELECT * FROM contact";
                    $run   = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($run)){
                        $facebook       = $row['facebook'];
                        $twitter        = $row['twitter'];
                        $instagram      = $row['Instagram'];
                        $pinterest      = $row['pinterest'];
                        $youtube        = $row['youtube']; 
                    }

            ?>

            <footer class="fixed-footer">
                <div class="footer-social">
                    <ul>
                        <li><a href="<?php echo $facebook;?>" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $youtube;?>" target="_blank" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="<?php echo $instagram;?>" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- Header  title --> 
                <div class="footer-title">
                    <h2><a  href="#"></a></h2>
                </div>
                <!-- Header  title  end-->
            </footer>