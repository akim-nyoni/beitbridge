<?php 
	/*Template Name: About Us*/
	get_header();
?>

    <div class="page-title-area bg-5">
      <div class="container">
        <div class="page-title-content">
          <h2><?php the_title();?></h2>
        </div>
      </div>
    </div>


    <section class="event-details-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="main-default-content mr-15">
              <h2>Our History</h2>

              <p>The Municipality, Beitbridge, is named after Alfred Beit, a British citizen who found the De Beers diamond mining company. It is located at the border between Zimbabwe and South Africa. Beitbridge Town is the southernmost town of the country and is in Matabeleland South Province. The name also refers to the Beitbridge Border Post, the busiest inland port of entry in Sub-Saharan Africa. The town, founded in 1929, was for many years the terminus of the railway from Pretoria, until a rail connection to Rutenga was built in 1974.</p>

              <h2>Town Status</h2>
              <p>Beitbridge town was granted its town status in July 2007 through Statutory Instrument 120 of 2007. Previously a Town Board under the Beitbridge Rural District Council administered the town. A Town Council was then established and came into being on the 1st of July 2007. The Town Council area was divided into six wards, each with an elected councillor. Its mandate as a local authority is to provide services to the community of Beitbridge. Almost a decade later after town status, Beitbridge graduated into Municipality status in 2018 through Statutory Instrument 28 of 2018, Proclamation 1 of 2018.</p>

              <h2>Town Coverage</h2>
              <p>The total coverage of the town is 83square kilometres. The population was estimated at 42 137 inhabitants and 11825 households according to the 2012 national census. The current population is estimated at around 60 000 inhabitants. Due to the proximity of the town to South Africa, most people from the inland districts flock into Beitbridge to do trade and others finally settle for ever.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="event-sidebar ml-15">
              <div class="event-single-sidebar">
                <h3>Contact Us</h3>
                <ul>
                  <li>Address<span>290 Justica Road, Beitbridge</span></li>
                  <li>Postal<span>290 Justicia Road, Beitbridge</span></li>
                  <li>Phone<span>+263 286 23793 </span></li>
                  <li>Email <span>pr@beitbridgemun.co.zw</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="team-area team-area-three pb-70">
      <div class="container">
        <div class="section-title">
          <h2>Meet Our Councillors</h2>
        </div>

        <div class="row justify-content-md-center">

          <?php  
            $sidebar_councillors = new WP_Query(array(
              'posts_per_page' => 12,
              'post_type' => 'councillors',                      
            ));

            while($sidebar_councillors-> have_posts()){
              $sidebar_councillors-> the_post(); ?>
              <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                  <?php the_post_thumbnail('councillors-cropped');?>

                  <div class="team-content">
                    <div class="team-name">
                      <h3><?php the_title();?></h3>
                      <h5><?php the_excerpt();?></h5>
                    </div>
                  </div>
                </div>
              </div>
            <?php }
          ?>
        </div>
      </div>
    </section>

  
    <?php the_content(); ?>
    

<?php get_footer();?>