<?php get_header(); ?>

  <section>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article style="
        background-color:<?php the_field('bg_color'); ?>;
        color:<?php the_field('font_color'); ?>;
      ">

        <h1><?php the_title(); ?></h2>

        <p>Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time> by <?php the_author_posts_link(); ?></p>

        <p>Category: <?php the_category(','); ?> | <?php the_tags( 'Tagged: ', ' • ' ); ?> | <?php comments_number(); ?></p>

        <?php the_excerpt(); ?>

        <p><a href="<?php the_permalink(); ?>">Read More &gt;&gt;</a><p>

      </article>

    <?php endwhile; else: ?>
    <?php endif; ?>

  </section>

<?php get_footer(); ?>