
              <li>
                <div class="events-date">
                  <span class="mb-2">Events</span>
                  <span>Calendar</span>
                </div>

                <span><i class="fa fa-map-marker"></i> Venue: <?php the_field('location');?> / <i class="fa fa-calendar"></i> Event Date: <?php the_field('start_date');?> / <i class="fa fa-clock"></i> <?php the_field('time');?></span>
                <h3>
                  <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h3>
                <a href="<?php the_permalink();?>" class="read-more"> Find out more <i class="ri-arrow-right-line"></i></a>
              </li>
