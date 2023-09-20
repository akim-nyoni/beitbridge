    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout7 bg-overlay bg-parallax">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <p><i class="far fa-fw fa-calendar-alt mr-2"></i> <?php the_date();?></p>
            <h1 class="pagetitle__heading"><?php the_title();?></h1>            
          </div>
        </div>
      </div>
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
            
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->