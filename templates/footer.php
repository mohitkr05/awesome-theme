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
  </div>
</footer>

<?php wp_footer(); ?>
