 
	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="container">
        	<div class="col-lg-4 col-md-4 col-sm-12">
        		 <?php dynamic_sidebar( 'footer1' ); ?>
        	</div>
        	<div class="col-lg-4 col-md-4 col-sm-12">
        		 <?php dynamic_sidebar( 'footer2' ); ?>
        	</div>
        	<div class="col-lg-4 col-md-4 col-sm-12">
        		 <?php dynamic_sidebar( 'footer3' ); ?>
        	</div>
        	 
        </div>
        <div class="navbar-inverse text-center copyright">
        	<?php do_action( 'arihant_credits' ); ?>
					<?php echo of_get_option( 'custom_footer_text', 'unite' ); ?>
					 
        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    	<i class="fa fa-angle-double-up"></i>
    </a>

		 
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
 
