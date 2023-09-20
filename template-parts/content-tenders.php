              <li>
                <div class="events-date">
                  <span class="mb-2">Tender</span>
                  <span>Notice</span>
                </div>

                <span><i class="fa fa-briefcase"></i> Tender Teference: <?php the_field('tender_reference');?> / <i class="fa fa-calendar"></i> Posted Date: <?php the_field('posted_date');?> / <i class="fa fa-calendar"></i> Closing Date: <?php the_field('closing_date');?> </span>
                <h3>
                  <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h3>
                <a href="<?php the_permalink();?>" class="read-more"> Find out more <i class="ri-arrow-right-line"></i></a>
              </li>
