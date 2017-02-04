<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Megan Lane - Multidisciplinary Artist</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png"> <!-- Favicon -->
    <?php wp_head();?>
  </head>





  <body>

    <!-- Header -->

    <!-- Main Navigation -->
    <header>
      <nav>
        <ul>
          <li><a href="/index.php/" class="nav-text">Work</a></li>
          <li><a href="/index.php/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-64.png" alt="Megan Lane's logo."></a></li>
          <li><a href="/index.php/about" class="nav-text">About</a></li>
        </ul>
      </nav>
      <?php
      $image = get_field('the_header_image');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" id="img-title"/>
      <?php endif; ?>
      <h1><?php the_title(); ?></h1>
      <h2><?php the_field('the_subtitle'); ?></h2>
    </header>