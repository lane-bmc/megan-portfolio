<?php get_header(); ?>    

    <section class="main">

      <!-- Project Grid -->
      <div class="container">
        <?php 
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        
            get_template_part( 'content', get_post_format() );
      
          endwhile; endif; 
        ?>
      </div>
    </section>
<?php get_footer(); ?>