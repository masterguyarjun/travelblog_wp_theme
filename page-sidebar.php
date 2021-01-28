<?php
/*
* Template Name: Page with Sidebar
*/ get_header(); ?>

<section class="container content">
  <div class="row">
      <?php
        while(have_posts()): the_post(); ?>
            <div class="col-sm-8 content-page">
                <?php the_content(); ?>
            </div>
      <?php   endwhile;
      ?>

      <div class="col-sm-4">
          <?php get_sidebar(); ?>
      </div>
  <div>

</section>


<?php get_footer(); ?>
