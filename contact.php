<?php
include("include.php");
?>
                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <h3>Contact Us </h3>
<hr>
<div class="row"> 
     <div class="col-sm-4" align="center">
          <div  style="border: 1px solid #e1e1e1;padding:3px;min-height:190px;">
          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 30px;;"></i><hr>
           International Research Journal of Modernization in Engineering Technology & Science, Indus Satellite Green, , AB Road, Indore (Madhya Pradesh)
          </div>
     </div>
     <div class="col-sm-4" align="center">
          <div  style="border: 1px solid #e1e1e1;padding:3px;min-height:190px;">
          <i class="fa fa-envelope" aria-hidden="true" style="font-size: 30px;;"></i><hr>
          editor@IJFER .com
          </div>
     </div>
     <div class="col-sm-4" align="center">
          <div  style="border: 1px solid #e1e1e1;padding:3px;min-height:190px;">
          <i class="fa fa-phone" aria-hidden="true" style="font-size: 30px;;"></i><hr>
          +91 786-969-67-94 , +91 786-986-27-10 (Whatsapp or SMS on this numbers)
          </div> 
     </div>
</div>
<div style="padding: 40px;;"></div>
<h3>Send Contact Request</h3><hr>

<form id="theme-form" action="forms/fmwebcontactmaster.php" class="form theme-form"  method="post" enctype="multipart/form-data" onsubmit="document.getElementById("submit").disabled=true;">
		<!----DATA ADDED----->
			
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Contact Name <span class="text-danger">*</span></label>
				<div class="col-sm-3">
			<input type="text" name="YDAPNNAcontact_name" id="YDAPNNAcontact_name" data-prompt-position="inline" class="form-control validate[required,custom[fullname]] text-input" placeholder="Type Contact Name ">
				  </div>
				<div class="col-sm-3">
			<label class="col-sm-3 col-form-label">Email Id <span class="text-danger">*</span></label>
				</div>
				<div class="col-sm-3">
			<input type="text" name="YDAPNNAemail_id" id="YDAPNNAemail_id" data-prompt-position="inline" class="form-control validate[required,custom[email]] text-input" placeholder="Type Email Id ">
				</div>
			</div>

   
  
 
		<!----DATA ADDED----->
			
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Mobile Number <span class="text-danger">*</span></label>
				<div class="col-sm-3">
			<input type="text" name="YDAPNNAmobile_number" id="YDAPNNAmobile_number" data-prompt-position="inline" class="form-control validate[required,custom[phone]] text-input" placeholder="Type Mobile Number"  maxlength="10 ">
				  </div> 
                      <div class="col-sm-3">
                      <label class="col-sm-12 col-form-label">Type Of Contact </label>
                      </div>
                      <div class="col-sm-3">
                           <select data-prompt-position="inline" class="form-control validate[required] text-input" id="YDAPNNAtype_of_contact" name="YDAPNNAtype_of_contact">
				<option value="">Select One</option> <option value="0"    >inquiry</option>  <option value="1"    >Regarding Paper</option>  <option value="2"    >Payment Issue</option>  <option value="3"    >Other</option>     </select>
                      </div>
			</div>

  
 
		<!----DATA ADDED----->
			
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Subject <span class="text-danger">*</span></label>
				<div class="col-sm-9">
			<input type="text" name="YDAPNNAsubject" id="YDAPNNAsubject" data-prompt-position="inline" class="form-control validate[required] text-input" placeholder="Type Subject ">
				  </div> 
			</div>

  
 
		<!----DATA ADDED----->
			 
		<div class="form-group row">
		<label class="col-sm-3 col-form-label">Contact Message <span class="text-danger">*</span></label>
			<div class="col-sm-9">

					<textarea  name="YDAPNNAcontact_message" id="YDAPNNAcontact_message" data-prompt-position="inline" class="form-control validate[required,minSize[3],maxSize[5000]] text-input summernote" placeholder="Type Contact Message"></textarea>
		      </div>
		</div>
		<!-- <div class="form-group row">
		<label class="col-sm-3 control-label"> Validation code : <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			<img src="captcha.php?rand=132787498" id="captchaimg"> 
				<div>Can\'t read the image? <a href="javascript:void(0)" onclick="refreshCaptcha();" style="color:#093"><strong>reload. </strong></a>
			</div>
		</div>
		<div class="col-sm-4" >
			<input  name="YDAPNNAcaptcha_code" type="text"class="form-control validate[required,ajax[ajaxCaptcha]] text-input" id="YDAPNNAcaptcha_code"  data-prompt-position="inline" maxlength="5">
		</div>
	</div> -->

 
  

			<hr>
						

				<div class="row">
					<div class="col-sm-12">
						<input name="YDAPNNArefIds" id="YDAPNNArefIds" type="hidden" value="0"> 
						<input name="YDAPNNApraumeter" id="YDAPNNApraumeter" type="hidden" value="2">
						<input type="hidden" id="YDAPNNAposttok" name="YDAPNNAposttok" value="238d2af3236645c63abd27f87f63528e" /> 
						<input name="praumeter" id="praumeter" type="hidden" value="1"> 
						<button class="btn btn-secondary" id="formsubmit">Send</button> 
						<button class="btn btn-info" type="reset" id="formsubmit">Clear</button>
					</div>
				</div>
				
			</form>  
                        </div>
                        
                        <!-- post status end -->

                    </div>

                    
                </div>
            </div>
        </div>

    </main>

    <footer id="cfooter">
<div class="container">
<!-- Footer Widgets
============================================= -->
<div class="cfooter-widgets-wrap">

<div class="row col-mb-50">
<div class="col-lg-6 order-last order-lg-first">

<div class="widget clearfix" style="padding-top:40px">

    <!-- <img src="images/logo@2x.png" style="position: relative; opacity: 0.85; left: -10px; max-height: 80px; margin-bottom: 20px;" alt="cfooter Logo">-->

     <p><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a></p>
 

     <p class="ls1 font-weight-light" style="opacity: 0.6; font-size: 13px;">copyright &copy; 2024 IJFER  all rights reserved  </p>
     <div>
            <a href="termsandcondition.php" style="color:#FFF">Term And Conditions</a>  |  <a href="privacypolicies.php" style="color:#FFF">Privacy Policy</a>   |  <a href="publicationethics.php" style="color:#FFF">Publication-Ethics</a>  |  <a href="peerreviewprocess.php" style="color:#FFF">Peer Review Process</a>  |  <a href="contact.php" style="color:#FFF">Contact Us</a> 

     </div>
</div>

</div>

<div class="col-lg-6">

<div class="row col-mb-50" style="padding-top: 40px;" align="right"> 
     <div class="col-md-12">
         

          <div class="bottommargin-sm clearfix">
               <a href="https://www.facebook.com/IJFER -125602252168672" class="social-icon si-colored si-small si-rounded si-facebook" title="Facebook" target="_blank">
                    <i class="fa fa-facebook-official" style="font-size:22px"></i> 
               </a>

               <a href="https://twitter.com/IJFER " class="social-icon si-colored si-small si-rounded si-twitter" title="Twitter" target="_blank">
                    <i class="fa fa-twitter" style="font-size:22px"></i> 
               </a>

               <a href="https://www.instagram.com/IJFER " class="social-icon si-colored si-small si-rounded si-instagram" title="Instagram" target="_blank">
                    <i class="fa fa-instagram" style="font-size:22px"></i> 
               </a>

                
          </div>

          
     </div>
</div>

</div>
</div>

</div><!-- .footer-widgets-wrap end -->
</div>
</footer>
 <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!-- Scroll to Top End -->    <!-- footer area start -->
    <footer class="d-none d-lg-block">
 
</footer>    <!-- footer area end -->
    <!-- footer area start -->
         <!-- footer area end -->

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
    <script src="assets/js/plugins/nice-select.min.js"></script>
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
    <script src="assets/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">    </script>
    <script src="assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"> </script>

    <script src="assets/js/custombasejs.js"></script>
    <script>
            jQuery(document).ready(function(){
                jQuery("form").validationEngine('attach'); }); 
    </script>
</body>

</html>