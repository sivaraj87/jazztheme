<?php 
/*

Template Name: Page w/o Sidebar

*/
get_header(); the_post(); ?>

  <section>

  	<header>
			<h1><?php the_title(); ?></h1>
  	</header>

  	<article>

	    <?php the_content(); ?>

    <article>

  </section>

<?php get_footer(); ?>