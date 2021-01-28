<?php get_header(); ?>

<h2 class="text-center">Latest Entries</h2>
<section class="container content">
  <div class="row">
      <?php $args= array(
        'posts_per_page' => 6
      ); ?>

      <?php $entries =  new WP_Query($args); while($entries->have_posts()): $entries->the_post(); ?>

          <div class="col-xs-12 col-md-6 col-lg-4 entry">
                <?php the_post_thumbnail('entry',  array('class' => 'img-responsive') ); ?>

              <div class="entry-content">

                  <h3><?php the_title(); ?></h3>

                  <p>
                    Published on: <span> <?php the_time(get_option('date_format') ); ?></span>
                  </p>

                  <p>
                    By: <span><?php the_author(); ?></span>
                  </p>

                  <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>

              </div>

          </div>

      <?php endwhile; wp_reset_postdata(); ?>

  </div>

</section>

<section class="categories container">
  <h2 class="text-center">Categories</h2>

  <?php $categories = get_categories(); ?>
  <div class="row">
    <?php foreach($categories as $category): ?>
        <div class="col-xs-6 col-md-6 col-lg-3 category">
              <i class="<?php echo $category->description; ?>" aria-hidden="true"></i>
              <a href="<?php echo get_category_link($category->cat_ID); ?>">
                <?php echo $category->name; ?>
              </a>
        </div>

    <?php endforeach; ?>
  </div>

</section>


<?php get_footer(); ?>
