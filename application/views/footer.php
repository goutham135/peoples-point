<footer class="footer transition">
  <div class="footer-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
          <!-- end social-media --> 
        </div>
        <!-- end col-6 -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <address>
          <i class="fa fa-phone" aria-hidden="true"></i> +91 7008469491<small>Any questions? Call us.</small>
          </address>
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <address>
          <i class="fa fa-map-marker" aria-hidden="true"></i>3rd Floor, 128/P2, Whitefield,<small>Bengaluru, Karnataka, 560058 </small>
          </address>
        </div>
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
  <!-- end footer-bar -->
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        
        <h4 class="footer-title">People's Point</h4>
        <p>Our goal is to modernize how people and companies approach the employment market.</p>
      </div>
	  
	  <div class="col-md-4">
        <h4 class="footer-title">OUR SERVICES</h4>
        <ul class="footer-menu">
          <li><a href="#">Business</a></li>
          <li><a href="#">Development</a></li>
          <li><a href="#">Strategy</a></li>
          <li><a href="#">Team Work</a></li>
          <li><a href="#">Marketting</a></li>
          <li><a href="#">Training</a></li>
          <li><a href="#">Consultation</a></li>
          
        </ul>
      </div>
      <!-- end col-4 -->
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h4 class="footer-title">Location</h4>
        <div class="video"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.92573387655!2d77.71840329999999!3d12.9766018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae11f5c857ac87%3A0x94ba1efc518d161e!2sUnispace!5e0!3m2!1sen!2sin!4v1715692312669!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <!--<div class="video"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118983.6153040918!2d81.53667066827742!3d21.262045511343103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dda23be28229%3A0x163ee1204ff9e240!2sRaipur%2C%20Chhattisgarh!5e0!3m2!1sen!2sin!4v1715280858628!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>-->
        <!-- end video --> </div>
      <!-- end col-4 -->
      
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">Copyright © 2024 , People's Point Pvt. Ltd</div>
        <!-- end col-6 -->
        <div class="col-md-6 col-sm-6 col-xs-12 text-right">Site Created with <span>♥</span> by <a href="#">NBDT</a></div>
        <!-- end col-6 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
  <!-- end sub-footer --> 
</footer>

<!-- end footer --> 
<a href="#" class="scrollup"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a> 

<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get great job recommendations for your career needs</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
	  	<form id="submitForm" enctype="multipart/form-data">
                <div class="">
                    <div class="xl:col-span-12">
                    	<label for="name" class="">Name <span style="color: red;">*</span></label>
                        	<input type="text" name="name" class="form-control" placeholder="Enter you name" required>
                    </div>
					<br>
					<div class="xl:col-span-12">
                    	<label for="email" class="">Email <span style="color: red;">*</span></label>
                        	<input type="email" name="email" class="form-control" placeholder="Enter you email" required>
                    </div>
					<br>
					<div class="xl:col-span-12">
                    	<label for="mobile" class="">Mobile <span style="color: red;">*</span></label>
                        	<input type="number" name="mobile" class="form-control" placeholder="Enter you mobile" required>
                    </div>
					<br>
                    <div class="xl:col-span-12">
                        <label for="resume" class="">Upload Resume</label>
                        <input type="file" name="resume" class="form-control" placeholder="Upload your resume">
                    </div>
                </div>
                
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
        <button type="button" class="btn btn-primary" id="submitBtn" onclick="submitForm()">Submit</button>
      </div>
    </div>
  </div>
</div>

<div id="openResumeFormModal" modal-center class="modal fade">
    <div class="">
        <div class="">
            <h5 class="text-16" id="openResumeFormModalTitle">Get Hired</h5>
            <button data-modal-close="openResumeFormModal" class=""><i data-lucide="x" class=""></i></button>
        </div>
        <div class="">
            <form id="addCountryForm" enctype="multipart/form-data">
                <input type="hidden" id="countryId" name="countryId">
                <div class="">
                    <div class="">
                    <label for="countryName" class="">Country <span style="color: red;">*</span></label>
                        <input type="text" id="countryName" name="countryName" class="form-input" placeholder="Country" required>
                    </div>
                    <div class="xl:col-span-12">
                        <label for="countryImage" class="">Image</label>
                        <input type="file" id="countryImage" name="countryImage" class="" placeholder="Select Image">
                    </div>
                </div>
                <div class="flex justify-end gap-2 mt-4">
                    <button type="reset" data-modal-close="addcountryModal" class="" id="cancelBtn">Cancel</button>
                    <button type="submit" id="addCountryBtn" onclick="" class="">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JS FILES --> 
<script src="<?php echo base_url('assets/')?>js/jquery.min.js"></script> 
<script type="text/javascript">
$(window).load(function() {
	$(".preloader").fadeOut("fast");
})
</script> 
<script>
	function openModal(){
		$('#exampleModal').show();
	}

	function closeModal(){
		$('#exampleModal').hide();
	}

	function submitForm(){

		$('.overlay').show();
        event.preventDefault();

		var form = $('#submitForm')[0]; // You need to use standard javascript object here
        var formData = new FormData(form);
        formData.append('resume', $('input[type=file]')[0].files[0]); 

		$.ajax({

			url: '<?php echo base_url()?>home/resumeFormSubmission',
			data: formData,
			contentType: false, 
            processData: false,
			type: 'POST',
			beforeSend: function(){
				$('#submitBtn').prop('disabled', true);
			},
			success: function(response){
				$('.overlay').hide();
				if(response == 'Mail has been sent'){
					$('#submitForm').trigger('reset');
					// $('#formSuccess').show();
					closeModal();
					alert("Form submitted successfully.");

				} else{
					
				}
				$('#submitBtn').prop('disabled', false);

			}
		});

	}


</script>
<script src="<?php echo base_url('assets/')?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url('assets/')?>js/jPushMenu.js"></script> 
<script src="<?php echo base_url('assets/')?>js/odometer.min.js"></script> 
<script src="<?php echo base_url('assets/')?>js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url('assets/')?>js/jquery.fancybox.js"></script> 
<script src="<?php echo base_url('assets/')?>js/wow.min.js"></script> 
<script src="<?php echo base_url('assets/')?>js/masonry.pkgd.min.js"></script> 
<script src="<?php echo base_url('assets/')?>js/scripts.js"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script type='text/javascript' src='<?php echo base_url('assets/')?>revolution/js/revolution.addon.slicey.min8a54.js?ver=1.0.0'></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/')?>revolution/js/extensions/revolution.extension.video.min.js"></script> 

<script type="text/javascript">
		
			var tpj=jQuery;
			var revapi24;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_24_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_24_1");
				}else{
					revapi24 = tpj("#rev_slider_24_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"off",
							bullets: {
								enable:true,
								hide_onmobile:false,
								style:"bullet-bar",
								hide_onleave:false,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:50,
								space:5,
								tmp:''
							}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "0",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}

                if(revapi24) revapi24.revSliderSlicey();
			});	/*ready*/
		</script>
</body>
</html>
