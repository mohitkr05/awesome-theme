<?php
class tiga_fb_box extends WP_Widget {

	/**
	 * Widget setup
	 */
	function tiga_fb_box() {

		$widget_ops = array( 
			'classname' => 'tiga_fb_widget', 
			'description' => __( 'A custom widget to display the Facebook fans box.', 'tiga' ) 
		);

		$control_ops = array( 
			'width' => 350, 
			'height' => 350, 
			'id_base' => 'tiga_fb_widget' 
		);

		$this->WP_Widget( 'tiga_fb_widget', __( '&raquo; Tiga FB Fans', 'tiga' ), $widget_ops, $control_ops );
	}

	/**
	 * Display widget
	 */
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
 
		$title = apply_filters('widget_title', $instance['title'] );
		$fb_url = $instance['fb_url'];
		$faces = $instance['faces'];
		$header = $instance['header'];
		$width = $instance['width'];
		$height = $instance['height'];

		if( $header == 'true' AND $faces == 'true' ) {
			$height = '290';
		} elseif( $faces == 'true' )  {
			$height = '260';
		} else {
			$height = '65';
		}

		echo $before_widget;
 
		if (!empty($title))
			echo $before_title . $title . $after_title;
		
		if($fb_url) { ?>
			<iframe src="//www.facebook.com/plugins/likebox.php?href=<?php echo urlencode( $fb_url ); ?>&amp;width=<?php echo esc_attr( $width ); ?>&amp;height=<?php echo esc_attr( $height ); ?>&amp;colorscheme=light&amp;show_faces=<?php echo !empty( $instance['faces'] ) ? 'true' : 'false'; ?>&amp;border_color&amp;stream=false&amp;header=<?php echo !empty( $instance['header'] ) ? 'true' : 'false'; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php echo esc_attr( $width ); ?>px; height:<?php echo esc_attr( $height ); ?>px;" allowTransparency="true"></iframe>
		<?php }

		echo $after_widget;
	}

	/**
	 * Update widget
	 */
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = esc_attr( $new_instance['title'] );
		$instance['fb_url'] = esc_url( $new_instance['fb_url'] );
		$instance['faces'] = isset( $new_instance['faces'] );
		$instance['header'] = isset( $new_instance['header']) ;
		$instance['width'] = esc_attr( $new_instance['width'] );

		return $instance;
	}

	/**
	 * Widget setting
	 */
	function form($instance) {

		/* Set up some default widget settings. */
        $defaults = array(
            'title' => '',
            'fb_url' => 'http://www.facebook.com/yourpage',
            'faces' => true,
            'header' => true,
            'width' => 300
        );

		$instance = wp_parse_args( (array) $instance, $defaults );
		$title = $instance['title'];
		$fb_url = esc_url( $instance['fb_url'] );
		$faces = $instance['faces'];
		$header = $instance['header'];
		$width = esc_attr( $instance['width'] );
	?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'fb_url' ) ); ?>"><?php _e( 'Fans URL:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fb_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fb_url' ) ); ?>" type="text" value="<?php echo $fb_url; ?>" />
		</p>
		<p>
            <label for="<?php echo $this->get_field_id('faces'); ?>"><?php _e('Show Faces', 'foto'); ?></label>
            <input id="<?php echo $this->get_field_id('faces'); ?>" name="<?php echo $this->get_field_name('faces'); ?>" type="checkbox" <?php checked( isset( $faces ) ? $faces : 1 ); ?> />&nbsp;
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('header'); ?>"><?php _e('Show Header', 'foto'); ?></label>
            <input id="<?php echo $this->get_field_id('header'); ?>" name="<?php echo $this->get_field_name('header'); ?>" type="checkbox" <?php checked( isset( $header ) ? $header : 1) ; ?> />&nbsp;
        </p>
        <p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>"><?php _e( 'Width:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'width' ) ); ?>" type="text" value="<?php echo $width; ?>" />
		</p>

	<?php
	}

}
?>