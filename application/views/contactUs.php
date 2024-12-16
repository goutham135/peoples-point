

  <!-- end navbar-default -->
  <div class="table">
    <div class="table-cell">
      <div class="container">
        <h3>CONTACT US</h3>
      </div>
      <!-- end container --> 
    </div>
    <!-- end table-cell --> 
  </div>
  <!-- end table --> 
</header>
<!-- end header -->


<!--contact us starts-->
<section class="contact">
  <div class="container">
    <div class="row ">
      <div class="col-xs-12 text-center justify-content-center" align="center">
        <h6>WOULD YOU LIKE TO COME BY AND SAY HI ?</h6>
        <h2>Contact Us</h2>
        
        <p>3rd Floor,  128/P2, EPIP Zone Whitefield Rd, <br>
        EPIP Zone, Whitefield, Bengaluru, Karnataka, 560058</p>
        <a href="tel:+91 7008469491"><p><span><strong>+91 7008469491</strong></span></p></a>
        <!--<p> Mellanie Mc’Field - Customer Relations </p>-->
        <p> <a href="mailto:shivam@peoplepoint.co.in" class="mail">contact@peoplepoint.co.in</a></p>
        <!--<p><a href="#" class="map"> Get Direction on Map</a></p>-->
    
        
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!--contact us ends-->

<!--<div id="map"></div>-->

<!--information starts-->
<section class="get-quote transition">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-8 col-xs-12">
        <h6>INFINITE SCROLL</h6>
        <h2>Get Some Information</h2>
        <form>
          <input type="text" placeholder="Your name" class="first">
          <input type="text" placeholder="Your e-mail" class="second">
          <input type="text" placeholder="Subject">
          <textarea placeholder="Your message"></textarea>
          <button type="submit">SEND NOW</button>
        </form>
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!--information ends-->

<!--get in touch starts-->
<section class="support-bar transition">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"> <a href="tel:+91 7008469491">Call Now</a> <img src="<?=base_url()?>assets/images/icon-support.png" alt="Image">
        <h4>Have any Question?</h4>
        <h6>We're here to help. Send us an email or call us at +91 7008469491</h6>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!--get in touch ends-->

<!--<section class="career">-->
<!--	<div class="container">-->
<!--    <div class="row">-->
<!--     <div class="col-xs-12">-->
<!--     	<h6>Awaiting to consult you</h6>-->
<!--     	<h2>CONTACT US</h2>-->
<!--     </div>-->
     <!-- end col-12 -->
<!--		<div class="col-xs-12">-->
<!--            <div class="alert alert-success" style="display: none" id="formSuccess">Form submitted successfully.</div>-->
<!--			<form class="resume-form" method="POST" href="contact-us" id="submitContactForm">-->
<!--            	<div class="form-group">-->
<!--                	<label>Your name</label>-->
<!--                    <input type="text" name="name">-->
<!--                </div>-->
                <!-- end form-group -->
<!--            	<div class="form-group">-->
<!--                	<label>Your e-mail</label>-->
<!--                    <input type="email" name="email">-->
<!--                </div>-->
                <!-- end form-group -->
<!--            	<div class="form-group">-->
<!--                	<label>Your mobile No.</label>-->
<!--                    <input type="number" name="mobile">-->
<!--                </div>-->
                <!-- end form-group --><div class="form-group">
<!--                	<label>Your message</label>-->
<!--                    <textarea name="message"></textarea>-->
<!--                </div>-->
                <!-- end form-group -->
<!--                <div class="form-group">-->
<!--                	<button type="submit" id="submitBtn">Submit</button>-->
<!--                </div>-->
                <!-- end form-group -->
<!--            </form>-->
            <!-- end resume-form -->
<!--		</div>-->
		<!-- end row -->
<!--	</div>-->
<!--	</div>-->
	<!-- end container -->
<!--</section>-->

<script type="text/javascript">

$(document).ready(function(){

    $('#submitContactForm').on('submit', function(event){
        $('.overlay').show();
        event.preventDefault();

        var error_ele = document.getElementsByClassName('err-msg');
        console.log(error_ele.length);
        if(error_ele.length > 0){
            // for(var i = 0; i < error_ele.length; i++){
            //     console.log(i);
            //     error_ele[i].remove();
            // }
            while(error_ele[0]) {
                error_ele[0].parentNode.removeChild(error_ele[0]);
            }
        }

        $.ajax({

            url: '<?php echo base_url()?>home/contactFormSubmission',
            data: jQuery('#submitContactForm').serialize(),
            type: 'POST',
            beforeSend: function(){
                $('#submitBtn').prop('disabled', true);
            },
            success: function(response){
                $('.overlay').hide();
                if(response == 1){
                    $('#submitContactForm').trigger('reset');
                    // $('#formSuccess').show();
                    alert("Form submitted successfully.");

                } else{
                    $.each(response.error, function(key, value){
                        console.log(key);

                        var el = $(document).find('[name= "' + key + '"]');
                        el.after($('<div class="text-danger err-msg">' + value[0] + '</div>'))
                    });
                }
                $('#submitBtn').prop('disabled', false);

            }
        });

    });

});

</script>