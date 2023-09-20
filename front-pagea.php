<?php get_header();?>

    <?php the_content();?>

    
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


      

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="events-content mr-15">
              <h2 class="text-center">Latest Tenders</h2>
              <ul class="events-list events-list-style-three">
                <?php  
                  $sidebar_tenders = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'tenders',                      
                  ));

                  while($sidebar_tenders-> have_posts()){
                    $sidebar_tenders-> the_post(); ?>
                    <li>
                      <div class="events-date">
                        <span class="mb-2">Tender</span>
                        <span>Notice</span>
                      </div>

                      <span><i class="fa fa-file"></i> Ref: <?php the_field('tender_reference');?> | <i class="fa fa-calendar"></i> Closing Date: <?php the_field('closing_date');?></span>
                      <h5>
                        <a href="<?php the_permalink();?>">
                          <?php the_title();?>
                        </a>
                      </h5>
                    </li>
                  <?php }
                ?>
              </ul>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="events-content mr-15">
              <h2 class="text-center">Latest RFQs</h2>
              <ul class="events-list events-list-style-three">
                <?php  
                  $sidebar_rfqs = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'rfqs',                      
                  ));

                  while($sidebar_rfqs-> have_posts()){
                    $sidebar_rfqs-> the_post(); ?>
                    <li>
                      <div class="events-date">
                        <span class="mb-2">RFQ</span>
                        <span>Notice</span>
                      </div>

                      <span><i class="fa fa-file"></i> Ref: <?php the_field('rfq_reference');?> | <i class="fa fa-calendar"></i> Closing Date: <?php the_field('closing_date');?></span>
                      <h5>
                        <a href="<?php the_permalink();?>">
                          <?php the_title();?>
                        </a>
                      </h5>
                    </li>
                  <?php }
                ?>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section class="blog-area pt-100 pb-70 text-center">
      <div class="container">
        <div class="section-title">
          <h2>Latest News And Notices</h2>
        </div>
        <div class="row justify-content-md-center">

          <?php 
          // Define our WP Query Parameters
          $the_query = new WP_Query( 'posts_per_page=3' ); ?>
            
          <?php 
            // Start our WP Query
            while ($the_query -> have_posts()) : $the_query -> the_post(); 
            // Display the Post Title with Hyperlink
          ?>
            <div class="col-lg-4 col-md-6">
              <div class="single-blog">
                <a href="<?php the_permalink();?>" class="blog-img">
                  <?php the_post_thumbnail('large');?>
                  <span>
                    <?php
                      foreach((get_the_category()) as $category) {
                      echo $category->cat_name . ' ';
                      }
                    ?>
                  </span>
                </a>

                <div class="blog-content text-center">
                  <ul>
                    <li><i class="ri-calendar-line"></i><span><?php echo get_the_date();?></span></li>
                    <li><i class="ri-user-fill"></i><span><?php the_author();?></span></li>
                    <li><i class="ri-briefcase-line"></i>
                      <span>
                        <?php
                          foreach((get_the_category()) as $category) {
                          echo $category->cat_name . ' ';
                          }
                        ?>
                      </span>
                    </li>
                  </ul>
                  <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                  <p><?php the_excerpt()?></p>
                </div>
              </div>
            </div>
          <?php 
            // Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
          ?>  

        </div>
      </div>
    </section>

 <?php get_footer();?>       