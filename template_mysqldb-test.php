<?php 
	/*Template Name: MySQL DB Test*/
	get_header();
?>

    
    <div class="page-title-area bg-26">
      <div class="container">
        <div class="page-title-content">
          <h2>Contact</h2>

          <ul>
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
          </ul>
        </div>
      </div>
    </div>

	<?php
		$host = "beitbridge-67a65995e086411fb2856fde942563f4-dbserver.mysql.database.azure.com";
		$user = 'rzzmuedrou@beitbridge-67a65995e086411fb2856fde942563f4-dbserver';
		$password = '4170341NAH6A435M$';
		$dbh = @mysql_connect($host, $user, $password);
		if (!$dbh) {
			echo "Error establishing a database connection";
		} else {
			echo "Database connection successful";
		}
	?>

    
    <section class="contact-info-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="map-area">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2611.8894925182362!2d29.990330886770526!3d-22.210862761465762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ec8c8615afebb37%3A0x58b8a8e5a666deb5!2sBeitbridge%20Town%20Council!5e0!3m2!1sen!2szw!4v1625236411922!5m2!1sen!2szw" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="contact-info">
              <h2>Get in touch</h2>

              <ul class="address">
                <li class="location">
                  <i class="ri-map-pin-2-fill"></i>
                  <span>Address</span>
                  290 Justicia Road, Beitbridge
                </li>
                <li>
                  <i class="ri-mail-line"></i>
                  <span>Email</span>
                  <a href="mailto:pr@beitbridgemun.co.zw">pr@beitbridgemun.co.zw</a>
                </li>
                <li>
                  <i class="ri-phone-fill"></i>
                  <span>Phone</span>
                  (+ 263 286) 23793 / 23362 / 23365
                </li>
              </ul>

              <h3>Follow Us</h3>

              <ul class="social-link">
                <li>
                  <a href="https://www.facebook.com/BeitbridgeMunicipality/" target="_blank">
                    <i class="ri-facebook-fill"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/beitbridgetc" target="_blank">
                    <i class="ri-twitter-fill"></i>
                  </a>
                </li>
                <li>
                  <a href="https://wa.me/263780273050" target="_blank">
                    <i class="ri-whatsapp-fill"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
      <div class="container">
        <div class="section-title">
          <h2>Send us a message</h2>
        </div>
        
		<?php 
          //if "email" variable is filled out, send email   
          if (isset($_REQUEST['email']))  {      
          //Email information   
            $admin_email = "admin@labcybersec.com";
            $from = 'website@lab.co.zw';
            $headers = "From: $from \r \n";
            $email = filter_var($_REQUEST["email"], FILTER_SANITIZE_EMAIL);
            $policy = strip_tags(trim($_REQUEST["policy"]));
            $subject = "Website Incident Response Assistance Request"; 
            $body = "An incident response assistance request has been submitted from email " .$email. " for Policy / IRRN number: " .$policy;          
            //send email   
            mail($admin_email, $headers, $subject, $body);      
            //Email response   
            echo "Thank you. Your request has been successfully submitted, and we will respond in the shortest possible time.";   
          }      
          //if "email" variable is not filled out, display the form   
          else  { 
           ?>   
            <form class="login-popup__form" method="post">
              <h3 class="login-popup__title text-center"><i class="fa fa-exclamation-triangle"></i> Incident Response</h3>
              <label class="text-center"><strong>For organisations under Cyber Risk Insurance Cover or incident response retainer</strong></label>
              <div class="form-group mb-30">
                <input type="text" class="form-control" id="policy" name="policy" placeholder="Your Policy / IRRIN Number" required>
              </div>
              <div class="form-group mb-30">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Business Email Address" required>
              </div>

              <div class="d-flex align-items-center justify-content-between mb-20">
                <div class="custom-control custom-checkbox d-flex align-items-center">
                  <input type="checkbox" class="custom-control-input" id="customCheck2" required='required'>
                  <label class="custom-control-label" for="customCheck2" ><strong>I agree to the <a href="<?php echo site_url('/terms-and-conditions/')?>">Terms &
                      Conditions</a></strong></label>
                </div>
              </div>
              <button type="submit" class="btn btn__secondary btn__block">Submit</button>  
            </form>    
          <?php   
        } ?>
        
        <form id="contactForm">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-lg-6 col-sm-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-lg-6 col-sm-6">
              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-lg-6 col-sm-6">
              <div class="form-group">
                <label>Subject</label>
                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required="" data-error="Write your message"></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12">
              <div class="form-group checkboxs">
                <input type="checkbox" id="chb2">
                <p>
                  Accept <a href="terms-conditions.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                </p>
              </div>
            </div>

            <div class="col-lg-12 col-md-12">
              <button type="submit" class="default-btn">
                <span>Send message</span>
              </button>
              <div id="msgSubmit" class="h3 text-center hidden"></div>
              <div class="clearfix"></div>
            </div>
          </div>
        </form>
      </div>
    </section>
    
 <?php get_footer();?>