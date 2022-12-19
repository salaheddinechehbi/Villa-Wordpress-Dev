<?php
/*
Template Name: Page Hotel
*/
get_header();
?>

    <section class="site-hero overlay page-inside" style="background-image: url(<?php bloginfo('template_url'); ?>/img/hero_2.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Our Hotel</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Enjoy your stay.</p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="bg-light">
      <div class="half d-md-flex d-block">
        <div class="image" data-aos="fade" style="background-image: url(<?php bloginfo('template_url'); ?>/img/hero_1.jpg);"></div>
        <div class="text" data-aos="fade-right" data-aos-delay="200">
          <h2>5 Star Hotel</h2>
          
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit aliquid, est reiciendis repellat sapiente consequatur aperiam, ducimus, id minima eligendi officiis, qui expedita sint culpa illum magnam ipsam adipisci possimus? Sit aspernatur eaque id sunt fuga facere hic laudantium, aperiam!</p>
          <p>Provident dolor aperiam similique maiores quasi. Quo repudiandae fuga commodi itaque dolores accusamus, dolor esse adipisci labore harum blanditiis in totam ipsum vero necessitatibus incidunt reprehenderit, id iste quas, ab, non! Voluptates, reiciendis culpa iure deserunt voluptatum itaque. Quos, soluta.</p>
          
          <p class="mt-5"><a href="#" class="btn btn-primary uppercase">Learn More</a></p>
        </div>
      </div>

      <div class="half d-md-flex d-block">
        <div class="image order-2" data-aos="fade"  style="background-image: url(<?php bloginfo('template_url'); ?>/img/hero_2.jpg);"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
          <h2>Presidential Room</h2>
          
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit aliquid, est reiciendis repellat sapiente consequatur aperiam, ducimus, id minima eligendi officiis, qui expedita sint culpa illum magnam ipsam adipisci possimus? Sit aspernatur eaque id sunt fuga facere hic laudantium, aperiam!</p>
          <p>Provident dolor aperiam similique maiores quasi. Quo repudiandae fuga commodi itaque dolores accusamus, dolor esse adipisci labore harum blanditiis in totam ipsum vero necessitatibus incidunt reprehenderit, id iste quas, ab, non! Voluptates, reiciendis culpa iure deserunt voluptatum itaque. Quos, soluta.</p>
          
          <p class="mt-5"><a href="#" class="btn btn-primary uppercase">Learn More</a></p>
        </div>
      </div>

    </section>
    <!-- END section -->

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Hotel Gallery</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="<?php bloginfo('template_url'); ?>/img/slider-3.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="<?php bloginfo('template_url'); ?>/img/slider-4.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="<?php bloginfo('template_url'); ?>/img/slider-5.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="<?php bloginfo('template_url'); ?>/img/slider-6.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div>
            <!-- END slider -->
          </div>
        
        </div>
      </div>
    </section>
    <!-- END section -->

<?php get_footer(); ?>