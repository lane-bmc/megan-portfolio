<?php get_header('page'); ?>

  <section class="main">
    <div class="wrapper">

      <!-- Content -->
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content-single', get_post_format() );
        endwhile; endif; 
      ?>

    </div>
  </section>
<?php get_footer(); ?>