    <?php get_header(); ?>

    <section class="site-hero overlay" style="background-image: url(<?php bloginfo('template_url'); ?>/img/hero_1.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Welcome to <em>Villa</em> resort</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Discover our world-class hotel &amp; restaurant resort.</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="#" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Explore The Beauty</a> <a href="#" class="btn uppercase btn-outline-light d-sm-inline d-block">Download</a></p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="section visit-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-right">You Can Visit</h2>
          </div>
        </div>

        <div class="row">
          
            <?php
              // Define args
              $args = array('post_type' => 'room');
              // the query
              $rooms = new WP_Query($args);
              
              if ($rooms->have_posts()) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ($rooms->have_posts()) : $rooms->the_post();?>
                    
                    <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right">
                      <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/img/img_1.jpg" alt="Image placeholder" class="img-fluid"> </a>
                      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                      <div class="reviews-star float-left">
                        <span class="ion-android-star"></span>
                        <span class="ion-android-star"></span>
                        <span class="ion-android-star"></span>
                        <span class="ion-android-star-half"></span>
                        <span class="ion-android-star-outline"></span>
                      </div>
                      <span class="reviews-count float-right">
                      <?= the_field('bed'); ?> Bed, <?= the_field('surface'); ?>m
                      </span>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Sorry, no rooms matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section blog-post-entry">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Recent Events Post</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
            <?php
            // Define args
            $args = array('post_type' => 'event', 'posts_per_page' => 3, 'order'=> 'DESC');
            // the query
            $events = new WP_Query($args);
            if ($events->have_posts()) : ?>
              <!-- pagination here -->
              <!-- the loop -->
              <?php while ($events->have_posts()) : $events->the_post(); ?>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
                    <div class="media media-custom d-block mb-4">
                      <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" class="mb-4 d-block">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                      </a>
                      <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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
    </section>
    <!-- END section -->

    <section class="section blog-post-entry">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Recent Blog Post</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
            <?php
            // Define args
            $args = array('post_type' => 'post', 'order'=> 'DESC');
            // the query
            $posts = new WP_Query($args);
            if ($posts->have_posts()) : ?>
              <!-- pagination here -->
              <!-- the loop -->
              <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
                    <div class="media media-custom d-block mb-4">
                      <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" class="mb-4 d-block">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                      </a>
                      <div class="media-body">
                        <span class="meta-post"><?php the_time('F j, Y g:i a'); ?></span>
                        <h2 class="mt-0 mb-3"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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
    </section>
    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="<?php bloginfo('template_url'); ?>/img/person_1.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
              
            </div>
          </div>
          <!-- END col -->
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="<?php bloginfo('template_url'); ?>/img/person_2.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>
          </div>
          <!-- END col -->

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="<?php bloginfo('template_url'); ?>/img/person_3.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>
          </div>
          <!-- END col -->
        </div>
      </div>
    </section>
    
    <?php get_footer(); ?>
    