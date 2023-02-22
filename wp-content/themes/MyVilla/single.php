<?php if (have_posts()) { the_post(); rewind_posts(); } ?>
 
  <?php if ('room' == get_post_type()) { ?>
    <?php include(TEMPLATEPATH . '/single-room.php'); ?>
  <?php } elseif ('event' == get_post_type()) { ?>
    <?php include(TEMPLATEPATH . '/single-event.php'); ?>
  <?php } else { ?>
    <?php include(TEMPLATEPATH . '/single-blog.php'); ?>
  <?php } ?>
