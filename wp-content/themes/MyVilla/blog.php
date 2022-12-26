<?php
/*
Template Name: Page Blog
*/
get_header();
?>

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
          <div class="col-md-12">
            <div class="row mb-5">
                <?php
                  // Define current page
                  $currentPage = get_query_var('paged') ? get_query_var('paged') : 1;
                  // Define args
                  $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'paged' => $currentPage
                  );
                  // the query
                  $the_query = new WP_Query($args);

                  if ($the_query->have_posts()) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-md-4">
                            <div class="media media-custom d-block mb-4">
                                <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" class="mb-4 d-block">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                </a>
                                <div class="media-body">
                                <span class="meta-post">
                                    <?php //the_date();the_time('F j, Y g:i a'); ?>
                                    <?php the_time('F j, Y g:i a'); ?>
                                </span>
                                <!-- <span class="meta-post"><?php the_category(); ?></span> -->
                                <!-- <span class="meta-post"><?php the_excerpt(); ?></span> -->
                                <a href="<?php get_author_posts_url(get_the_author_meta('ID')) ?>">
                                   by <?php the_author(); ?>
                                </a>
                                <h2 class="mt-0 mb-3"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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

            <div class="row">
              <div class="col-md-12">
                <nav role="navigation">
                  <?php
                  $totalPage = $the_query->max_num_pages;
                    echo paginate_links(array(
                      'total' => $totalPage,
                      'current' => $currentPage,
                      'type' => 'list',
                      'show_all' => true
                    ));
                  ?>
                  <!-- <ul class="pagination custom-pagination pagination-lg">
                    <li class="page-item active">
                      <a class="page-link" href="">1</a>
                    </li>
                    <li class="page-item ">
                      <a class="page-link " href="#">2</a>
                    </li>
                    <li class="page-item ">
                      <a class="page-link" href="#">3</a>
                    </li>
                  </ul> -->
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>