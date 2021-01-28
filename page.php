<?php get_header(); ?>

<section class="container content">
  <div class="row">

    <?php if(is_page('contact')): ?>
        <div class="col-sm-8 col-sm-offset-2 contact-page">
        <?php   while(have_posts()): the_post();
              the_content();
          endwhile; ?>
        </div>
    <?php else: ?>
      <?php
        while(have_posts()): the_post();
            the_content();
        endwhile;
      ?>
    <?php endif; ?>
  <div>

</section>


<?php get_footer(); ?>
