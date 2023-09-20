<?php 
	/*Template Name: Online Services*/
	get_header();
?>
	 
    <div class="page-title-area bg-26">
      <div class="container">
        <div class="page-title-content">
          <h2>Contact</h2>

          <ul>
            <li><a href="<?php echo site_url('/')?>">Home</a></li>
            <li class="active"><?php the_title();?></li>
          </ul>
        </div>
      </div>
    </div>


	<?php the_content();?>

    <br><br><br><br>
    <section class="simple-steps-area pb-70 text-center">
      <div class="container">
        <div class="section-title">
          <h2>Online Services</h2>
          <h4>We are making it easy for you to stay up to date with your affairs with the Municipality</h4>
        </div>

        <div class="row">          
          <div class="col-lg-4 col-sm-6">
            <a href="<?php echo site_url('/online-services/check-your-balance-online')?>">
              <div class="single-simple-steps">
                <i class="flaticon-search"></i>
                <h3>Check Your Balance Online</h3>
                <p>You can now check your balance online, without the need to visit the council premises.</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-sm-6">
            <a href="<?php echo site_url('/online-services/pay-your-rates-online')?>">
              <div class="single-simple-steps">
                <i class="flaticon-presentation"></i>
                <h3>Pay Your Rates Online</h3>
                <p>You can now pay your rates online, without the need to visit the council premises.</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-sm-6">
            <a href="<?php echo site_url('/online-services/submit-your-proof-of-payment')?>">
              <div class="single-simple-steps">
                <i class="flaticon-contract"></i>
                <h3>Submit Your POP</h3>
                <p>Paid your rates using RTGS, ZIPIT, Ecocash and Internal Transfer? Submit your proof of payment.</p>
              </div>
            </a>
          </div>

        </div>
      </div><br><br><br>


    </section>


 <?php get_footer();?>