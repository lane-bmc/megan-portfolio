<?php get_header( 'project' ); ?>

  <section class="main">
    <div class="wrapper">
      

      <!-- Content -->
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content-single', get_post_format() );
        endwhile; endif; 
      ?>

      <a class="button" href="/index.php/">More Projects</a>
        
    </div>
  </section>
<?php get_footer(); ?>