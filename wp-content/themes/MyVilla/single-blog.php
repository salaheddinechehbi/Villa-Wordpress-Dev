<?php get_header(); ?>

    <section class="site-hero overlay page-inside" style="background-image: url(<?php bloginfo('template_url'); ?>/img/hero_2.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Blog</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Events, news and activities in the hotel.</p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="section bg-light post">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row mb-5">

                <?php if ( have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-12">
                            <div class="media media-custom d-block mb-4">
                                <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" class="mb-4 d-block single-ps-img">
                                    <?php the_post_thumbnail('full', array('class' => '')); ?>
                                </a>
                                <div class="media-body">
                                <span class="meta-post">
                                    <?php //the_date();the_time('F j, Y g:i a'); ?>
                                    <?php the_time('F j, Y g:i a'); ?>
                                </span>
                                <a href="<?php get_author_posts_url(get_the_author_meta('ID')) ?>">
                                   by <?php the_author(); ?>
                                </a>
                                <h2 class="mt-0 mb-3"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                                <div>
                                    <?php the_content(); ?>
                                </div>
                                <?php
                                    comments_template();
                                ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->
                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>

          </div>
          <!-- END content -->
          <div class="col-md-4">
            <div class="row">

              <div class="col-md-11 ml-auto">


                <div class="side-box">
                  <h2 class="heading">Popular Post</h2>
                  <ul class="post-list list-unstyled">
                    <?php
                     $args2 = array('posts_per_page' => 3, 'category_name' => 'Excursions', 'order'=> 'DESC');
                     $wp_query = new WP_Query($args2);
                    ?>
                    <?php if ($wp_query->have_posts()) : ?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <li>
                      <a href="<?php the_permalink() ?>" class="d-flex">
                        <span class="mr-3 image side-cat">
                          <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        </span>
                        <div>
                          <span class="meta"><?php the_date(); ?></span>
                          <h3><?php the_title(); ?></h3>
                        </div>
                      </a>
                    </li>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                  </ul>
                </div>

                <div class="side-box">
                  <h2 class="heading">Categories</h2>
                  <ul class="post-categories list-unstyled">
                  <?php
                    $categories = get_categories();
                    foreach ($categories as $category) { ?>
                          <li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?> <span class="count">(<?= get_category($category->cat_ID)->count; ?>)</span></a></li>
                      <?php } ?>
                      <!-- end of the loop -->
                  </ul>
                </div>

              </div>
              

             

            </div>
            
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>