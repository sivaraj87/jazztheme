<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

    <body <?php body_class(); ?>>

      <nav class="main-nav">
        <?php wp_nav_menu(array('menu' => 'Main Menu' , 'container' => '' )); ?>
      </nav>

    <header>
      <h1 class="screen-reader-text"><?php bloginfo('name'); ?></h1>
    </header>