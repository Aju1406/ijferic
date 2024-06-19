<?php
            include("include.php");
?>

                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="row" style="border-bottom:1px solid #e1e1e1; padding:5px;margin-bottom:30px;"> 
<div class="col-sm-12" >
     <h2>Submit paper Online</h2>
</div>
</div>

<div class="row" style="border-bottom:1px solid #e1e1e1; padding:5px;"> 
    
      <form id="theme-form" action="forms/fmpapermaster.php" class="form theme-form"  method="post" enctype="multipart/form-data" onsubmit="document.getElementById("submit").disabled=true;">
			
		<!----DATA ADDED----->
			
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Volume </label>
				<div class="col-sm-3">
				 <input name="YDAPNNAvolume_id" id="YDAPNNAvolume_id" value="68" type="hidden">  
                      <input name="YDAPNNAissue_id" id="YDAPNNAissue_id" value="73" type="hidden">  
                      <input id="YDAPNNAvolume_name" name="YDAPNNAvolume_name"value="Volume 6" type="hidden">    
                      <input id="YDAPNNAvolume_name" name="YDAPNNAvolume_name"value="Volume 6" type="hidden"> 
                      
                     
                      
                     <strong> Volume 6  Issue 6, June 2024</strong>
				  </div>
                      <div class="col-sm-3">
                           <label class="col-sm-12 col-form-label">Research Area </label>
                    </div>
                    <div class="col-sm-3">
                     <select data-prompt-position="inline" class="form-control validate[required] text-input" id="YDAPNNAresearch_category" name="YDAPNNAresearch_category">
			<option value="">Select One</option>
			<option value="3">Aeronautical Engineering</option><option value="4">Aerospace Engineering</option><option value="105">Agricultural</option><option value="6">Agricultural Engineering</option><option value="79">Applied Sciences</option><option value="74">Architecture</option><option value="101">ARTS</option><option value="63">Astronomy</option><option value="5">Automobile Engineering</option><option value="7">Bio Medical Engineering</option><option value="57">Bio Technology</option><option value="60">Biology</option><option value="92">Botany</option><option value="8">Ceramic Technology</option><option value="9">Chemical Engineering</option><option value="59">Chemistry</option><option value="10">Civil Engineering</option><option value="71">Commerce</option><option value="11">Computer Science & Engineering</option><option value="93">dentistry</option><option value="12">Earthquake Engineering</option><option value="96">Economics</option><option value="102">Education</option><option value="103">Education</option><option value="86">Electrical and Computer Engineering</option><option value="106">Electrical and Electronics Engineering</option><option value="14">Electrical Engineering</option><option value="13">Electronics & Communications Engineering</option><option value="15">Engineering Chemistry</option><option value="16">Engineering Management</option><option value="18">Engineering Mathematics</option><option value="19">Engineering Physics</option><option value="20">Engineering Sciences</option><option value="87">English</option><option value="21">Environmental Engineering</option><option value="65">Environmental Science</option><option value="97">Finance</option><option value="22">Fire Engineering</option><option value="68">Food Science</option><option value="54">Food Technology</option><option value="53">Forensic Science And Technology</option><option value="23">Genetic Engineering</option><option value="62">Geology</option><option value="100">Geophysics</option><option value="108">Health Sciences</option><option value="99">History</option><option value="25">Industrial Engineering</option><option value="26">Information Technology</option><option value="58">Information Technology</option><option value="27">Instrumentation Engineering</option><option value="104">Journalism</option><option value="73">Library And Information Science</option><option value="80">Library And Information Science</option><option value="84">Management</option><option value="28">Manufacturing Engineering</option><option value="29">Marine Engineering</option><option value="30">Material Engineering</option><option value="69">Materials Sciences</option><option value="76">Materials Sciences</option><option value="70">Mathematics</option><option value="77">Mathematics</option><option value="67">Measurement Science</option><option value="31">Mechanical Engineering</option><option value="95">medical science</option><option value="32">Metallurgical Engineering</option><option value="107">Microbiology</option><option value="33">Mining Engineering</option><option value="56">Nanotechnology</option><option value="34">Natural Sciences, Humanities</option><option value="35">Network Engineering</option><option value="37">Nuclear Engineering</option><option value="38">Nuclear Engineering</option><option value="40">Ocean Engineering</option><option value="41">Petroleum Engineering</option><option value="88">Pharmacy</option><option value="61">Physics</option><option value="42">Polymer Engineering</option><option value="43">Production Engineering</option><option value="51">Rubber Technology</option><option value="44">Safety Engineering</option><option value="94">science</option><option value="109">Science Laboratory Technology</option><option value="91">Social Science</option><option value="85">Sociology</option><option value="45">Software Engineering</option><option value="52">Space Technology</option><option value="82">Spatial Science</option><option value="78">Statistics</option><option value="46">Structural Engineering</option><option value="47">Systems Engineering</option><option value="49">Telecommunication Engineering</option><option value="50">Textile Engineering</option><option value="89">Tissue Engineering</option><option value="48">Transportation Engineering</option><option value="64">Zoology</option> 
				</select>
                    </div>
			</div>
			<div style="clear:both">
			</div> 
 
 
		<!----DATA ADDED----->
			
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Paper Title <span class="text-danger">*</span></label>
				<div class="col-sm-9">
			<input type="text" style="font-size:19px; font-weight:bolder; background-color:aquamarine" name="YDAPNNApaper_name" id="YDAPNNApaper_name" data-prompt-position="inline" class="form-control validate[required] text-input" placeholder="Type Paper Name">
				  </div>
			</div>


               <div class="form-group row">
			<label class="col-sm-3 col-form-label">Abstract /Introduction<span class="text-danger">*</span></label>
				<div class="col-sm-9">
			<textarea type="text" style="" name="YDAPNNApaper_abstract" id="YDAPNNApaper_abstract" data-prompt-position="inline" class="form-control validate[required] text-input" placeholder="Abstract /Introduction"></textarea>
				  </div>
			</div>
 
		<!----DATA ADDED----->
		 
			
			 
		<!----DATA ADDED----->
			
<div class="form-group row">
		<label class="col-sm-3 col-form-label">Country <span class="text-danger">*</span></label>
			<div class="col-sm-3">
					<select data-prompt-position="inline" class="form-control validate[required] text-input_country" id="YDAPNNAlocation_country" name="YDAPNNAlocation_country">
					<option value="">Select </option>
						<option value="252" >Afghanistan</option><option value="253" >Albania</option><option value="254" >Algeria</option><option value="255" >Andorra</option><option value="256" >Angola</option><option value="257" >Antigua and Barbuda</option><option value="258" >Argentina</option><option value="259" >Armenia</option><option value="260" >Australia</option><option value="261" >Austria</option><option value="262" >Azerbaijan</option><option value="263" >Bahamas</option><option value="265" >Bahrain</option><option value="264" >Bangladesh</option><option value="266" >Barbados</option><option value="268" >Belarus</option><option value="267" >Belgium</option><option value="269" >Belize</option><option value="270" >Benin</option><option value="251" >bharat</option><option value="271" >Bhutan</option><option value="272" >Bolivia</option><option value="273" >Bosnia and Herzegovina</option><option value="274" >Botswana</option><option value="275" >Brazil</option><option value="276" >Brunei</option><option value="277" >Bulgaria</option><option value="278" >Burkina Faso</option><option value="279" >Burundi</option><option value="280" >Cambodia</option><option value="281" >Cameroon</option><option value="282" >Canada</option><option value="283" >Cape Verde</option><option value="284" >Central African Republic</option><option value="285" >Chad</option><option value="286" >Chile</option><option value="287" >China</option><option value="288" >Colombia</option><option value="289" >Comoros</option><option value="292" >Costa Rica</option><option value="293" >Cote d'Ivoire (Ivory Coast)</option><option value="294" >Croatia</option><option value="295" >Cuba</option><option value="296" >Cyprus</option><option value="297" >Czech Republic</option><option value="290" >Democratic Republic Of the Congo</option><option value="298" >Denmark</option><option value="299" >Djibouti</option><option value="300" >Dominica</option><option value="301" >Dominican Republic</option><option value="302" >East Timor (Timor-Leste)</option><option value="303" >Ecuador</option><option value="304" >Egypt</option><option value="305" >El Salvador</option><option value="306" >Equitorial Guinea</option><option value="307" >Eritrea</option><option value="308" >Estonia</option><option value="309" >Ethiopia</option><option value="365" >Federal States of Micronesia</option><option value="310" >Fiji</option><option value="311" >Finland</option><option value="312" >France</option><option value="313" >Gabon</option><option value="315" >Georgia</option><option value="316" >Germany</option><option value="317" >Ghana</option><option value="318" >Greece</option><option value="319" >Grenada</option><option value="320" >Guatemala</option><option value="321" >Guinea</option><option value="322" >Guinea-Bissau</option><option value="323" >Guyana</option><option value="324" >Haiti</option><option value="325" >Honduras</option><option value="326" >Iceland</option><option value="327" >India</option><option value="101" >India</option><option value="328" >Indonesia</option><option value="102" >Indonesia</option><option value="329" >Iran</option><option value="330" >Iraq</option><option value="332" >Israel</option><option value="106" >Israel</option><option value="333" >Italy</option><option value="334" >Jamaica</option><option value="335" >Japan</option><option value="336" >Jordan</option><option value="337" >Kazakhstan</option><option value="338" >Kenya</option><option value="339" >Kiribati</option><option value="116" >Korea South</option><option value="342" >Kosovo</option><option value="343" >Kuwait</option><option value="344" >Kyrgyzstan</option><option value="345" >Laos</option><option value="346" >Latvia</option><option value="347" >Lebanon</option><option value="348" >Lesotho</option><option value="349" >Liberia</option><option value="350" >Libya</option><option value="351" >Liechtenstein</option><option value="352" >Lithuania</option><option value="353" >Luxembourg</option><option value="354" >Macedonia</option><option value="355" >Madagascar</option><option value="356" >Malawi</option><option value="357" >Malaysia</option><option value="358" >Maldives</option><option value="359" >Mali</option><option value="360" >Malta</option><option value="361" >Marshall Islands</option><option value="362" >Mauritania</option><option value="363" >Mauritius</option><option value="364" >Mexico</option><option value="366" >Moldova</option><option value="367" >Monaco</option><option value="368" >Mongolia</option><option value="370" >Montenegro</option><option value="371" >Morocco</option><option value="372" >Mozambique</option><option value="373" >Myanmar</option><option value="374" >Namibia</option><option value="375" >Nauru</option><option value="376" >Nepal</option><option value="377" >Netherlands</option><option value="378" >New Zealand</option><option value="379" >Nicaragua</option><option value="380" >Niger</option><option value="381" >Nigeria</option><option value="340" >North Korea</option><option value="382" >Norway</option><option value="383" >Oman</option><option value="384" >Pakistan</option><option value="385" >Palau</option><option value="386" >Panama</option><option value="387" >Papa New Guinea</option><option value="389" >Paraguay</option><option value="390" >Peru</option><option value="391" >Phillipines</option><option value="392" >Poland</option><option value="395" >Portugal</option><option value="394" >Qatar</option><option value="331" >Republic of Ireland</option><option value="291" >Republic of the Congo</option><option value="396" >Romania</option><option value="397" >Russia</option><option value="398" >Rwanda</option><option value="399" >Saint Kitts and Nevis</option><option value="400" >Saint Lucia</option><option value="401" >Saint Vincent and The Grenadines</option><option value="402" >Samoa</option><option value="403" >San Marino</option><option value="404" >Sao Tome and Principe</option><option value="405" >Saudi Arabia</option><option value="406" >Senegal</option><option value="407" >Serbia</option><option value="408" >Seychelles</option><option value="409" >Sierra Leone</option><option value="410" >Singapore</option><option value="411" >Slovakia</option><option value="412" >Slovenia</option><option value="413" >Solomon Islands</option><option value="414" >Somalia</option><option value="415" >South Africa</option><option value="341" >South Korea</option><option value="416" >Spain</option><option value="417" >Sri Lanka</option><option value="208" >Sri Lanka</option><option value="418" >Sudan</option><option value="419" >Suriname</option><option value="420" >Swaziland</option><option value="421" >Sweden</option><option value="422" >Switzerland</option><option value="423" >Syria</option><option value="424" >Taiwan</option><option value="216" >Taiwan</option><option value="425" >Tajikistan</option><option value="426" >Tanzania</option><option value="427" >Thailand</option><option value="219" >Thailand</option><option value="314" >The Gambia</option><option value="428" >Togo</option><option value="429" >Tonga</option><option value="430" >Trinidad and Tobago</option><option value="431" >Tunisia</option><option value="432" >Turkey</option><option value="433" >Turkmenistan</option><option value="434" >Tuvalu</option><option value="435" >Uganda</option><option value="436" >Ukraine</option><option value="437" >United Arab Emirates</option><option value="438" >United Kingdom</option><option value="439" >United States of America</option><option value="441" >Uruguay</option><option value="440" >USA</option><option value="442" >Uzbekistan</option><option value="443" >Vanuatu</option><option value="444" >Vatican City</option><option value="445" >Venezuela</option><option value="446" >Vietnam</option><option value="240" >Vietnam</option><option value="447" >Yemen</option><option value="448" >Zambia</option><option value="449" >Zimbabwe</option>					</select> 
		      </div>
			<div class="col-sm-3">
		<!--<label class="col-sm-12 col-form-label">State <span class="text-danger">*</span></label>-->
               </div>
			<div class="col-sm-3" id="YDAPNNAgetStateIddiv">
			<!--<select data-prompt-position="inline" class="form-control validate[required] text-input_state" id="YDAPNNAlocation_state" name="YDAPNNAlocation_state">
				<option value="">Select </option>
			</select> -->
               </div>
		</div>
		 
		<!--<div class="form-group row">
		<label class="col-sm-3 col-form-label">City <span class="text-danger">*</span></label>
		<div class="col-sm-3" id="YDAPNNAgetCityIddiv">
				<select data-prompt-position="inline" class="form-control validate[required] text-input_city" id="YDAPNNAlocation_city" name="YDAPNNAlocation_city">
					<option value="">Select </option>
				</select>
		      </div>
                <div class="col-sm-3">
		<label class="col-sm-12 col-form-label">Location Postal Code <span class="text-danger">*</span></label>

                </div>
                <div class="col-sm-3">
                     <input  data-prompt-position="inline" class="form-control validate[required] text-input_city" id="YDAPNNAlocation_postal_code" name="YDAPNNAlocation_postal_code" type="text" value="" />  
                </div>
		</div> -->
          <hr>
          <div class="form-group row">
		<h4>Add Author </h4>
        
          </div>
          <div class="addauthors">
               <table id="kureshi" class="table">
                    <thead>
                         <tr> 
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Organizations /Institute</th>
                              <th> </th> 
                         </tr>
                    </thead>  
                    <tbody>
                         <tr id="ukta1">
                              <td><input type="hidden" id="YDAPNNAtcount_1" name="YDAPNNAtcount[]" value="1"> 
                                   <input  data-prompt-position="inline" class="form-control validate[required] text-input_city" id="YDAPNNAauthor_name_1" name="YDAPNNAauthor_name_1" type="text" placeholder="Author Full Name" />  
                              </td>
                              <td>
                                   <input  data-prompt-position="inline" class="form-control validate[required,custom[email]] text-input" id="YDAPNNAemail_id_1" name="YDAPNNAemail_id_1" type="text" placeholder="Author Email ID" />  </td>
                              <td>
                                   <input  data-prompt-position="inline" class="form-control validate[required,custom[phone],minsize[10],maxsize[10]] text-input" id="YDAPNNAmobile_number_1" name="YDAPNNAmobile_number_1" type="text" placeholder="Contact Number" maxlength="10" />  </td>
                              <td>
                                   <input  data-prompt-position="inline" class="form-control validate[required] text-input" id="YDAPNNAorganization_1" name="YDAPNNAorganization_1" type="text" placeholder="College/Institute Name" /> </td>
                              <td></td>
                         </tr>
                    </tbody>  
               </table>  
          </div>
            <div align="right"><a href="javascript:void(0)" onclick="letmeaddmoreauthor('YDAPNNA');" class="btn btn-info">+Add New Author</a></div>
          <hr>
          <h4>Upload Paper: </h4>
          <hr>
          <div class="form-group row">
			<label class="col-sm-3 col-form-label">File Upload <span class="text-danger">*</span></label>
				<div class="col-sm-6">
			<input type="file" class="form-control validate[required, custom[validateMIME[application/msword|application/msword|application/vnd.openxmlformats-officedocument.wordprocessingml.document]]] text-input" name="YDAPNNAuploadpaper" id="YDAPNNAuploadpaper" accept=".doc,.docx" data-prompt-position="inline" placeholder="Only Doc/Docx Files allowed" id="form-validation-field-0"> 
				  </div>

				<div class="col-sm-3" style="font-size: 11px; color:#ff0000;">Upload Only .Doc/.Docx File and click submit
                    </div>
			</div>

               <!-- <div class="form-group row">
		<label class="col-sm-3 control-label"> Enter Captcha code : <span class="text-danger">*</span></label>
		<div class="col-sm-4" >
			<input  name="YDAPNNAcaptcha_code" type="text"class="form-control validate[required,ajax[ajaxCaptcha]] text-input" id="YDAPNNAcaptcha_code"  data-prompt-position="inline" maxlength="5">
		</div>
		<div class="col-sm-4">
			<img src="captcha.php?rand=1922182051" id="captchaimg"> 
				<div>Can\'t read the image? <a href="javascript:void(0)" onclick="refreshCaptcha();" style="color:#093"><strong>reload. </strong></a>
			</div>
		</div>
	</div>
      -->
               <div class="form-group row">
                 
			
				<div class="col-sm-12" style="padding:12px;padding-left:20px;">
			<label class="col-sm-12 col-form-label"> <span class="text-danger"> <input class="validate[required] checkbox" type="checkbox" id="agree" name="agree" data-prompt-position="inline" >    i agree to terms of service and privacy policy  </span></label>
				  </div>

			 
			</div>

          <hr>
          <div class="row">
               
               <div class="col-sm-12">
                    <input name="YDAPNNArefIds" id="YDAPNNArefIds" type="hidden" value="0"> 
                    <input name="YDAPNNApraumeter" id="YDAPNNApraumeter" type="hidden" value="2">
                    <input type="hidden" id="YDAPNNAposttok" name="YDAPNNAposttok" value="9a8f750e92b310cde064612803c08af9" /> 
                    <input name="praumeter" id="praumeter" type="hidden" value="1">
                    <button class="btn btn-primary" id="formsubmit">Submit </button>
                    <button class="btn btn-info" type="reset" id="formsubmit">Clear</button>
               </div>
          </div>
     </form> 
     
</div> 
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
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>
    <script src="assets/js/jquery-editable-select.min.js"></script>
    <script src="assets/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">    </script>
    <script src="assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"> </script>

    <script>
            jQuery(document).ready(function(){
                jQuery("form").validationEngine('attach');
                  $('#YDAPNNAlocation_country')
    .editableSelect();
                 /*
                  $('#YDAPNNAlocation_country')
    .editableSelect()
    .on('select.editable-select', function (e, li) {
        loadallstate( li.val(),'YDAPNNAgetStateIddiv',1,'YDAPNNAlocation');
        
    }); */
            }); 
    </script>
    <script src="assets/js/custombasejs.js"></script>

</body>

</html>