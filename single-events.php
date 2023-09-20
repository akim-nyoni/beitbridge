<?php get_header();?>
  
    


    <!-- Start Event Details Area -->
    <section class="event-details-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="main-default-content mr-15">
              <h2><?php the_title();?></h2>

              <div class="gap-20"></div>

              <div class="gap-20"></div>
              <?php the_content();?>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="event-sidebar ml-15">
              <div class="event-single-sidebar">
                <h3>Events Details:</h3>

                <ul>
                  <li> <i class="fa fa-calendar"></i> Start Date: <span><?php the_field('start_date');?></span></li>
                  <li> <i class="fa fa-calendar"></i> End Date: <span><?php the_field('end_date');?></span></li>
                  <li> <i class="fa fa-clock"></i> Time: <span><?php the_field('time');?></span></li>
                  <li> <i class="fa fa-globe"></i> Location: <span><?php the_field('location');?></span></li>
                </ul>
				  <br><br>
				  
                <img class="mt-4" src="<?php the_field('event_thumbnail');?>" alt="Image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 <?php get_footer();?>       