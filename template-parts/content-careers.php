              <li>
                <div class="events-date">
                  <span class="mb-2">Vacancy</span>
                  <span>Notice</span>
                </div>

                <span><i class="fa fa-map-marker"></i> Location: <?php the_field('location');?> / <i class="fa fa-calendar"></i> Posted Date: <?php the_field('posted_date');?> / <i class="fa fa-calendar"></i> Closing Date: <?php the_field('closing_date');?> / <i class="fa fa-briefcase"></i> Type: <?php the_field('vacancy_type');?> / <i class="fa fa-briefcase"></i> Salary Grade: <?php the_field('salary_grade');?></span>
                <h3>
                  <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h3>
                <a href="<?php the_permalink();?>" class="read-more"> Find out more <i class="ri-arrow-right-line"></i></a>
              </li>
