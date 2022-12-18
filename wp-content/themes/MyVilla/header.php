<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> |
     <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    
    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/aos.css">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

    <?php wp_head(); ?>
</head>
<body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="http://localhost/villa/"><em>Villa</em></a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="http://localhost/villa/">Home</a></li>
                        <li><a href="<?php echo ''.get_the_permalink(49); ?>">Hotel</a></li>
                        <li><a href="<?php echo ''.get_the_permalink(23); ?>">About</a></li>
                        <li><a href="<?php echo ''.get_the_permalink(21); ?>">Blog</a></li>
                        <li><a href="<?php echo ''.get_the_permalink(19); ?>">Contact</a></li>
                        <li><a href="http://localhost/villa/our-team/">Our Team</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Contact Info</h3>
                          <p>98 West 21th Street, Suite 721 <br> New York NY 10016</p>
                          <p>info@yourdomain.com</p>
                          <p>(+1) 435 3533</p>
                          
                        </div>
                        <div class="col-md-6">
                          <h3>Connect With Us</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
              
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->