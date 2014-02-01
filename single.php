<?php get_header(); the_post(); ?>

  <section>

    <header>
      <h1><?php the_title(); ?></h1>
    </header>

      <article class="grid-2-3">

        <p>Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time> in <?php the_category(','); ?>. <?php the_tags( 'Tagged: ', ' • ' ); ?></p>

        <?php the_content(); ?>

      </article>

    <?php get_sidebar(); ?>

  </section>

<?php get_footer(); ?>