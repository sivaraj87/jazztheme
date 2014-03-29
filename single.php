<?php get_header(); the_post(); ?>

  <section>

    <header>
      <h1><?php the_title(); ?></h1>
    </header>

      <article class="grid-2-3">

        <p>Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time> by <?php get_the_author(); ?></p>

        <p>Category: <?php the_category(','); ?> | <?php the_tags( 'Tagged: ', ' • ' ); ?> | <?php comments_number( '% comments' ); ?></p>

        <?php the_content(); ?>

      </article>

    <?php get_sidebar(); ?>

  <div class="comments">
    <?php comments_template(); ?>
  </div>

  </section>

<?php get_footer(); ?>