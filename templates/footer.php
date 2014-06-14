<footer class="content-info fixed_footer" role="contentinfo">
  <div class="container">
   	
	<div id="bottom">
		<div class="container">
			 <div class="row">
                    <div class="col-md-4">
                       <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                    <div class="col-md-4">
                       <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                    <div class="col-md-4">
                          <?php dynamic_sidebar( 'footer-3' ); ?>
                       
                    </div>
                </div> <!-- row -->
		</div>
	</div>
	
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    <?php if( of_get_option( 'awesome_credits' ) == false ) { ?>

			<span class="credit">
				<?php printf( __( 'Powered by <a href="http://wordpress.org/" title="%1$s" rel="generator">%2$s</a> &middot; Theme by <a href="http://kumarmohit.com/" title="%3$s" rel="designer">%4$s</a>', 'awesome' ),
					esc_attr( 'A multipurpose theme based on Bootstrap'),
					'WordPress',
					esc_attr( 'Mohit'),
					'Mohit'
				); ?>
			</span>

		<?php } ?>
		
  </div>
</footer>

<?php wp_footer(); ?>
