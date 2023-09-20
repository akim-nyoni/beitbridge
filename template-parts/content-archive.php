              <div class="col-lg-6 col-md-6">
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
    
                  <div class="blog-content">
                    <ul>
                      <li><i class="ri-calendar-line"></i><span><?php echo get_the_date();?></span></li>
                      <li><i class="ri-user-line"></i><span><?php the_author();?></span></li>
                    </ul>
      
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
      
                    <p><?php the_excerpt()?></p>
                  </div>
                </div>
              </div>
