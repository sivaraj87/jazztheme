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
      );

      $front_page_loop = new WP_Query( $args );
      while ( $front_page_loop->have_posts() ) : $front_page_loop->the_post(); ?>

      <article id="<?php post_name(); ?>" style="background-color: <?php the_field('background_color'); ?>; color: <?php the_field('color'); ?>;">

        <h2 class="h1"><?php the_title(); ?></h2>
        <h3 class="ancillary"><?php the_field( 'header_text' ); ?></h3>

        <?php the_content(); ?>

      </article>

      <?php the_field('bg_image'); ?>

    <?php  endwhile; ?>
    <?php wp_reset_postdata(); ?>

  </section>

<?php get_footer(); ?>