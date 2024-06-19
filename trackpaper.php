<?php
include('include.php');
?>

                   
                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            
   <div class="row" style="border-bottom:1px solid #e1e1e1; padding:5px;"> 
          <div class="col-sm-12">
             <strong> Track Your Paper </strong>
          </div>  
     </div>
<form action="trackpaper.php" method="post">
     <div class="row" style="border-bottom:1px solid #e1e1e1; padding:5px;"> 
          <div class="col-sm-7">
               <input type="text" id="d" name="d" data-prompt-position="inline" class="form-control validate[required] text-input" placeholder="Type Paper Key">
          </div> 
          <div class="col-sm-5"><button type="submit">Check Status</button></div>
     </div>
</form>
     
<div style="padding: 40px;;"></div>
   
                        </div>
                        
                        <!-- post status end -->

                    </div>

                    
                </div>
            </div>
        </div>

    </main>

    <?php
    include('footer.php');
    ?>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- nice select JS --> 
    <!-- audio video player JS -->
    <script src="assets/js/plugins/plyr.min.js"></script>
    <!-- perfect scrollbar js -->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- light gallery js -->
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- isotope filter js -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>