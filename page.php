<?php get_header(); ?>

  <article class="front-page">

    <style>
    .front-page {
      background-color: <?php the_field('background-color'); ?>;
      color: <?php the_field('color'); ?>;
    }
    </style>

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

    <header>
      <h1><?php the_title(); ?></h1>
      <?php the_excerpt(array('class' => 'ancillary')); ?>
    </header>

    <?php the_content(); ?>

    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail(array('class' => 'fancybox'));
        } ?>

    <?php  endwhile; ?>
    <?php wp_reset_postdata(); ?>

  </article>

<?php get_footer(); ?>