    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout7 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?php bloginfo('template_directory');?>/images/shape-15.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading"><?php the_title();?></h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


    <section class="text-content pt-90 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <div class="text__block">
              <div class="text__block-content row">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <?php the_content();?>
                  </div>
                </div><!-- /.col-lg-6 -->
              </div>
            </div><!-- /.text-block -->
            <div class="blog-share d-flex flex-wrap justify-content-between mb-30 mt-20">
              <a href="https://www.facebook.com/sharer/sharer.php?u=www.lab.co.zw" class="btn btn__secondary btn__xl d-flex align-items-center">
                <i class="fab fa-facebook-f mr-20"></i><span>Share on Facebook</span>
              </a>
              <a href="https://twitter.com/intent/tweet?url=www.lab.co.zw&text=Share%20to%20twitter" class="btn btn__secondary btn__xl d-flex align-items-center">
                <i class="fab fa-twitter mr-20"></i><span>Share on Twitter</span>
              </a>
            </div><!-- /.blog-share -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->