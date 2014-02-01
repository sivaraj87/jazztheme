<?php 
  get_header(); 
  global $query_string;
  query_posts( $query_string . '&showposts=-1' );
?>

  <section>

    <header>
      <h1>Tag: <?php single_tag_title(); ?></h1>
    </header>

    <div class="grid-2-3">

        <?php while ( have_posts() ) : the_post(); ?>

          <article class="archive-view">

            <h2 class="h1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p>Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time></p>

            <?php the_excerpt(); ?>

            <p><a href="<?php the_permalink(); ?>">More &rarr;</a></p>

          </article>

      <?php endwhile; ?>

    </div>

    <?php get_sidebar(); ?>

  </section>

<?php get_footer(); ?>