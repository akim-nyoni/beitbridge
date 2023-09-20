    
            <!-- career item #1 -->
            <div class="job-item">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <a href="<?php the_permalink();?>"><h4 class="job-item__title"><?php the_excerpt();?></h4></a>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                  <a href="<?php the_permalink();?>"><h4 class="job-item__title"><?php the_title();?></h4></a>
                  <span class="job-item__location"><strong><a href="<?php the_permalink();?>"><i class="fa fa-calendar"></i> Posted: <?php the_date();?></a></strong></span>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-3 d-flex align-items-center justify-content-end btn-wrap">
                  <a href="<?php the_permalink();?>" class="btn btn__secondary">Open</a>
                </div><!-- /.col-lg-3 -->
              </div><!-- /.row -->
            </div><!-- /.job-item -->

