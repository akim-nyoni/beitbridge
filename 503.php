<?php get_header();?>

	<!-- ==========================
        404
    =========================== -->
    <section class="page-404 mt--100 py-0">
      <div class="bg-img"><img src="<?php bloginfo('template_directory');?>/images/home3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 d-flex align-items-center vh-100 error-wrapper">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h1 class="error-code">503</h1>
                <div class="widget widget-search">
                  <div class="widget__content">
                    <form class="widget__form-search">
                      <input type="text" class="form-control" placeholder="Start typing your search...">
                      <button class="btn" type="submit"><i class="icon-search"> </i>Search </button>
                    </form>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-search -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h2 class="error-title">Service currently unavailable!</h2>
                <p class="error-desc">Our website may be currently facing challenges.</p>
                <a href="<?php echo site_url('/') ?>" class="btn btn__primary btn__icon btn__xl">
                  <span>Back To Home</span> <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-404 -->

<?php get_footer();?>