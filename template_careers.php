<?php
/*Template Name: Vacancy Notices*/
get_header(); ?>

    

    <?php
      query_posts(array(
         'post_type' => 'careers'
      )); 
    ?>

    <section class="events-area events-area-style-two ptb-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="events-content mr-15">
            <ul class="events-list events-list-style-three">
              
              <?php 
                if (have_posts()){
                  while(have_posts()){
                  the_post();
                  get_template_part('template-parts/content', 'careers');
                  }
                }
              ?>

            </ul>
          </div>

        </div>
      </div>
    </section>

    
	<?php get_footer();?>       