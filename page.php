<?php 
/*

Template Name: Page with Sidebar

*/
get_header(); the_post(); ?>

  <section>

  	<header>
  		<h1><?php the_title(); ?></h1>
  	</header>

  	<article class="grid-2-3">

      <p class="ancillary"><?php the_field( 'header_text' ); ?></p>

      <?php the_content(); ?>

    </article>

    <?php get_sidebar(); ?>

  </section>

<?php get_footer(); ?>