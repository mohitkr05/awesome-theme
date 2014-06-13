
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<div class="row">
<?php while (have_posts()) : the_post(); ?>
            <div class="col-md-4 portfolio-item">
 <article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
 								<?php if( has_post_thumbnail() ) { ?>

										<figure class="slides-thumbnail">
											<?php the_post_thumbnail( 'awesome-300px', array( 'class' => 'img-thumbnail', 'alt' => get_the_title() ) ); ?>
										</figure>

									<?php } ?>
	
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
</div>
<?php endwhile; ?>
</div>
<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>



        <hr>
