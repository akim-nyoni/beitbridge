<?php get_header();?>
  

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-details-content mr-15">
              <div class="blog-top-content">
                <div class="blog-content">
					
				  <h1><?php the_title();?></h1>
                  <ul class="admin">
                    <li><i class="ri-map-pin-line"></i>Location: <?php the_field('location');?></li>
                    <li><i class="ri-calendar-2-line"></i>Posted: <?php the_field('posted_date');?></li>                    
                    <li><i class="ri-calendar-2-line"></i>Closing Date: <?php the_field('closing_date');?></li>
                    <li><i class="ri-briefcase-line"></i>Type: <?php the_field('vacancy_type');?></li>
					<li><i class="ri-briefcase-line"></i>Salary Grade: <?php the_field('salary_grade');?></li>
                  </ul>
                  
                  <?php the_content();?>

                  <div class="gap-mb-20"></div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="widget-sidebar ml-15">

              <div class="sidebar-widget categories">
                <h3>Latest Vacancy Notices</h3>
  
                <ul>
                  <?php  
                    $sidebar_vacancies = new WP_Query(array(
                      'posts_per_page' => 5,
                      'post_type' => 'careers',                      
                    ));

                    while($sidebar_vacancies-> have_posts()){
                      $sidebar_vacancies-> the_post(); ?>
                      <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                    <?php }
                  ?>
                </ul>
              </div>

              <div class="sidebar-widget recent-post">
                <h3 class="widget-title">Latest News And Notices</h3>
                
                <ul>
                  <?php 
                  // Define our WP Query Parameters
                  $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                    
                  <?php 
                    // Start our WP Query
                    while ($the_query -> have_posts()) : $the_query -> the_post(); 
                    // Display the Post Title with Hyperlink
                  ?>                    
                    <li>
                      <a href="<?php the_permalink();?>">
                        <?php the_title();?>
                        <?php the_post_thumbnail('small-featured');?>
                      </a>
                      <span><i class="ri-calendar-2-line"></i> <?php echo get_the_date();?></span>
                    </li>
                  <?php 
                    // Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                  ?>
                </ul>
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Details Area -->

 <?php get_footer();?>       