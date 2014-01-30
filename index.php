<?php get_header(); ?>

    <?php
      $args = array(
        'post_type' => 'front_page',
        'post_status' => 'publish',
        'showposts' => -1,
        'meta_key' => 'article_order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
      );

    $front_page_loop = new WP_Query( $args );
    while ( $front_page_loop->have_posts() ) : $front_page_loop->the_post(); ?>

  <article class="front-page" style="background-color: <?php the_field('background_color'); ?>; color: <?php the_field('color'); ?>;">

    <h1><?php the_title(); ?></h1>
    <p class="ancillary"><?php echo get_the_excerpt(); ?></p>

    <?php the_content(); ?>

    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail(array('class' => 'fancybox'));
        } ?>

  </article>

    <?php  endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>