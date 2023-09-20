<?php 
	/*Template Name: Contact Us*/
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
            $name = strip_tags(trim($_REQUEST["name"]));
            $email = filter_var($_REQUEST["email"], FILTER_SANITIZE_EMAIL);
            $policy = strip_tags(trim($_REQUEST["policy"]));
            $subject = "Website Incident Response Assistance Request"; 
            $body = "An incident response assistance request has been submitted from email " .$email. " for Policy / IRRN number: " .$policy;          
            //send email   
            mail($admin_email, $headers, $subject, $body);      
            //Email response   
            echo "Thank you. Your request has been successfully submitted, and we will respond in the shortest possible time.";   
          }    
        //if "email" variable is filled out, send email   
          if (isset($_REQUEST['email']))  {      
          //Email information  
            $name = strip_tags(trim($_REQUEST["name"]));
            $to = "edtsikayi@gmail.com";
            $email_heading = "New Municipality Of Beitbridge Website Contact Form Submission";
            $headers = "From: $email_heading \r \n";
            $email = filter_var($_REQUEST["email"], FILTER_SANITIZE_EMAIL);
            $subject = strip_tags(trim($_REQUEST["subject"]));
            $message = strip_tags(trim($_REQUEST["message"]));
            $body = "A new message has been sent by" .$name.":";  
            $body = $message;          
            //send email   
            mail($to, $headers, $subject, $body);      
            //Email response   
            echo "Thank you. Your request has been successfully submitted, and we will respond in the shortest possible time.";   
          }      
          //if "email" variable is not filled out, display the form   
          else  { 
           ?>
            <form id="contactForm" method="post" action="">
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
    
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required="" data-error="Write your message"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
    
                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn">
                    <span>Send message</span>
                  </button>
                  <div id="submit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
            <?php   
        } ?>
      </div>
    </section>
    
 <?php get_footer();?>