<a href="<?php the_permalink(); ?>">
  <figure class="project-preview col-1of3 col-1of2-sm">
    <?php
    	$image = get_field('the_preview_image');
    	if( !empty($image) ): ?>
    		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endif; ?>
    <figcaption class="project-info">
      <p class="project-name"><?php the_title(); ?></p>
    </figcaption>
  </figure>
</a>