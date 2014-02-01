<?php get_header(); ?>

  <section>

    <header class="screen-reader-text">
      <h1><?php bloginfo('name'); ?></h1>
    </header>

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

      <article style="background-color: <?php the_field('background_color'); ?>; color: <?php the_field('color'); ?>;">

        <h2 class="h1"><?php the_title(); ?></h2>
        <p class="ancillary"><?php the_field( 'header_text' ); ?></p>

        <?php the_content(); ?>

      </article>

    <?php  endwhile; ?>
    <?php wp_reset_postdata(); ?>

  </section>

<?php get_footer(); ?>