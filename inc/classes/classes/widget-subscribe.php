<?php
class tiga_subscribe extends WP_Widget {

	/**
	 * Widget setup
	 */
	function tiga_subscribe() {
	
		$widget_ops = array( 
			'classname' => 'tiga_subscribe_widget', 
			'description' => __('A custom widget to display the feedburner subscription widget.', 'tiga') 
		);

		$control_ops = array( 
			'width' => 300, 
			'height' => 350, 
			'id_base' => 'tiga_subscribe_widget' 
		);

		$this->WP_Widget( 'tiga_subscribe_widget', __('&raquo; Tiga Subscribe', 'tiga'), $widget_ops, $control_ops );
	}

	/**
	 * Display widget
	 */
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
 
		$title 		= apply_filters('widget_title', $instance['title'] );
		$feed_id 	= $instance['feed_id'];

		echo $before_widget;
 
		if (!empty($title))
			echo $before_title . $title . $after_title;
		?>
		
		<div class="subscribe">
			<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo esc_attr( $feed_id ); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
				<input type="text" name="email" placeholder="<?php esc_attr_e( 'Email address &hellip;', 'tiga' ); ?>" />
				<input type="hidden" value="<?php echo esc_attr( $feed_id ); ?>" name="uri"/>
				<input type="hidden" name="loc" value="en_US"/>
				<input type="submit" value="<?php esc_attr_e( 'Subscribe', 'tiga' ); ?>" />
			</form>
		</div>

		<?php
		echo $after_widget;
	}

	/**
	 * Update widget
	 */
	function update($new_instance, $old_instance) {
		$instance 				= $old_instance;
		$instance['title'] 		= esc_attr( $new_instance['title'] );
		$instance['feed_id'] 	= esc_attr( $new_instance['feed_id'] );

		return $instance;
	}

	/**
	 * Widget setting
	 */
	function form($instance) {

		$defaults = array( 
			'title' => '', 
			'feed_id' => '' 
		);
		$instance = wp_parse_args( (array) $instance, $defaults );
		$title = $instance['title'];
		$feed_id = $instance['feed_id'];
	?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'feed_id' ) ); ?>"><?php _e( 'Feedburner ID(http://feeds.feedburner.com/<b>satrya</b>):', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'feed_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'feed_id' ) ); ?>" type="text" value="<?php echo esc_attr( $feed_id ); ?>" />
		</p>

	<?php
	}


}
?>