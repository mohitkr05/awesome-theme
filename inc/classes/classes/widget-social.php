<?php
class tiga_social extends WP_Widget {

	/**
	 * Widget setup
	 */
	function tiga_social() {

		$widget_ops = array( 
			'classname' => 'tiga_social_widget', 
			'description' => __( 'A custom widget to display the social icons.', 'tiga' ) 
		);

		$control_ops = array( 
			'width' => 350, 
			'height' => 350, 
			'id_base' => 'tiga_social_widget' 
		);

		$this->WP_Widget( 'tiga_social_widget', __( '&raquo; Tiga Social Network', 'tiga' ), $widget_ops, $control_ops );
	}

	/**
	 * Display widget
	 */
	function widget( $args, $instance ) {
		extract( $args, EXTR_SKIP );
 
		$title = apply_filters('widget_title', $instance['title'] );
		$email_id = $instance['email_id'];
		$twitter_id = $instance['twitter_id'];
		$fb_id = $instance['fb_id'];
		$gplus_id = $instance['gplus_id'];
		$ytube_id = $instance['ytube_id'];
		$flickr_id = $instance['flickr_id'];
		$linkedin_id = $instance['linkedin_id'];
		$pinterest_id = $instance['pinterest_id'];
		$dribbble_id = $instance['dribbble_id'];
		$github_id = $instance['github_id'];
		$lastfm_id = $instance['lastfm_id'];
		$vimeo_id = $instance['vimeo_id'];
		$tumblr_id = $instance['tumblr_id'];
		$instagram_id = $instance['instagram_id'];
		
		echo $before_widget;
 
		if (!empty( $title ))
			echo $before_title . $title . $after_title;
		?>
		
		<ul class="social-buttons clearfix">
			<?php if ( $email_id ) { ?>
				<li><a href="mailto:<?php echo antispambot( $email_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/mail.png'; ?>"></a></li>
			<?php } if ( $twitter_id ) { ?>
				<li><a href="http://twitter.com/<?php echo esc_attr( $twitter_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/twitter.png'; ?>"></a></li>
			<?php } if ( $fb_id ) { ?>
				<li><a href="http://www.facebook.com/<?php echo esc_attr( $fb_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/facebook.png'; ?>"></a></li>
			<?php } if ( $gplus_id ) { ?>
				<li><a href="https://plus.google.com/<?php echo esc_attr( $gplus_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/google+.png'; ?>"></a></li>
			<?php } if ( $ytube_id ) { ?>
				<li><a href="http://www.youtube.com/user/<?php echo esc_attr( $ytube_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/youtube.png'; ?>"></a></li>
			<?php } if ( $flickr_id ) { ?>
				<li><a href="http://www.flickr.com/photos/<?php echo esc_attr( $flickr_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/flickr.png'; ?>"></a></li>
			<?php } if ( $linkedin_id ) { ?>
				<li><a href="http://linkedin.com/in/<?php echo esc_attr( $linkedin_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/linkedin.png'; ?>"></a></li>
			<?php } if ( $pinterest_id ) { ?>
				<li><a href="http://pinterest.com/<?php echo esc_attr( $pinterest_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/pinterest.png'; ?>"></a></li>
			<?php } if ( $dribbble_id ) { ?>
				<li><a href="http://dribbble.com/<?php echo esc_attr( $dribbble_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/dribbble.png'; ?>"></a></li>
			<?php } if ( $github_id ) { ?>
				<li><a href="https://github.com/<?php echo esc_attr( $github_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/github.png'; ?>"></a></li>
			<?php } if ( $lastfm_id ) { ?>
				<li><a href="http://www.last.fm/user/<?php echo esc_attr( $lastfm_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/last_fm.png'; ?>"></a></li>
			<?php } if ( $vimeo_id ) { ?>
				<li><a href="http://vimeo.com/<?php echo esc_attr( $vimeo_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/vimeo.png'; ?>"></a></li>
			<?php } if ( $tumblr_id ) { ?>
				<li><a href="http://<?php echo esc_attr( $tumblr_id ); ?>.tumblr.com" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/tumblr.png'; ?>"></a></li>
			<?php } if ( $instagram_id ) { ?>
				<li><a href="http://instagram.com/<?php echo esc_attr( $instagram_id ); ?>" target="_blank"><img src="<?php echo trailingslashit( TIGA_IMAGE ) . 'icons/instagram.png'; ?>"></a></li>
			<?php } ?>
		</ul>
		
		<?php
		echo $after_widget;
	}
 	
	/**
	 * Update widget
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = esc_attr( $new_instance['title'] );
		$instance['email_id'] = is_email( $new_instance['email_id'] );
		$instance['twitter_id'] = esc_attr( $new_instance['twitter_id'] );
		$instance['fb_id'] = esc_attr( $new_instance['fb_id'] );
		$instance['gplus_id'] = esc_attr( $new_instance['gplus_id'] );
		$instance['ytube_id'] = esc_attr( $new_instance['ytube_id'] );
		$instance['flickr_id'] = esc_attr( $new_instance['flickr_id'] );
		$instance['linkedin_id'] = esc_attr( $new_instance['linkedin_id'] );
		$instance['pinterest_id'] = esc_attr( $new_instance['pinterest_id'] );
		$instance['dribbble_id'] = esc_attr( $new_instance['dribbble_id'] );
		$instance['github_id'] = esc_attr( $new_instance['github_id'] );
		$instance['lastfm_id'] = esc_attr( $new_instance['lastfm_id'] );
		$instance['vimeo_id'] = esc_attr( $new_instance['vimeo_id'] );
		$instance['tumblr_id'] = esc_attr( $new_instance['tumblr_id'] );
		$instance['instagram_id'] = esc_attr( $new_instance['instagram_id'] );

		return $instance;
	}

	/**
	 * Widget setting
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
        $defaults = array(
            'title' => '',
            'email_id' => '',
            'twitter_id' => '',
            'fb_id' => '',
            'gplus_id' => '',
            'ytube_id' => '',
            'flickr_id' => '',
            'linkedin_id' => '',
            'pinterest_id' => '',
            'dribbble_id' => '',
            'github_id' => '',
            'lastfm_id' => '',
            'vimeo_id' => '',
            'tumblr_id' => '',
            'instagram_id' => ''
        );
        $instance = wp_parse_args( (array) $instance, $defaults );
		$title = esc_attr( $instance['title'] );
		$email_id = is_email( $instance['email_id'] );
		$twitter_id = esc_attr( $instance['twitter_id'] );
		$fb_id = esc_attr( $instance['fb_id'] );
		$gplus_id = esc_attr( $instance['gplus_id'] );
		$ytube_id = esc_attr( $instance['ytube_id'] );
		$flickr_id = esc_attr( $instance['flickr_id'] );
		$linkedin_id = esc_attr( $instance['linkedin_id'] );
		$pinterest_id = esc_attr( $instance['pinterest_id'] );
		$dribbble_id = esc_attr( $instance['dribbble_id'] );
		$github_id = esc_attr( $instance['github_id'] );
		$lastfm_id = esc_attr( $instance['lastfm_id'] );
		$vimeo_id = esc_attr( $instance['vimeo_id'] );
		$tumblr_id = esc_attr( $instance['tumblr_id'] );
		$instagram_id = esc_attr( $instance['instagram_id'] );
	?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'email_id' ) ); ?>"><?php _e( 'Email:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email_id' ) ); ?>" type="text" value="<?php echo is_email( $email_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter_id' ) ); ?>"><?php _e( 'Twitter Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter_id' ) ); ?>" type="text" value="<?php echo esc_attr( $twitter_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'fb_id' ) ); ?>"><?php _e( 'Facebook Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fb_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fb_id' ) ); ?>" type="text" value="<?php echo esc_attr( $fb_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'gplus_id' ) ); ?>"><?php _e( 'Google Plus Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'gplus_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'gplus_id' ) ); ?>" type="text" value="<?php echo esc_attr( $gplus_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'ytube_id' ) ); ?>"><?php _e( 'Youtube Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'ytube_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'ytube_id' ) ); ?>" type="text" value="<?php echo esc_attr( $ytube_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'flickr_id' ) ); ?>"><?php _e( 'Flickr Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'flickr_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'flickr_id' ) ); ?>" type="text" value="<?php echo esc_attr( $flickr_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin_id' ) ); ?>"><?php _e( 'Linkedin Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin_id' ) ); ?>" type="text" value="<?php echo esc_attr( $linkedin_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest_id' ) ); ?>"><?php _e( 'Pinterest Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pinterest_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest_id' ) ); ?>" type="text" value="<?php echo esc_attr( $pinterest_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'dribbble_id' ) ); ?>"><?php _e( 'Dribbble Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'dribbble_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dribbble_id' ) ); ?>" type="text" value="<?php echo esc_attr( $dribbble_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'github_id' ) ); ?>"><?php _e( 'Github Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'github_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'github_id' ) ); ?>" type="text" value="<?php echo esc_attr( $github_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'lastfm_id' ) ); ?>"><?php _e( 'Last FM Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'lastfm_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'lastfm_id' ) ); ?>" type="text" value="<?php echo esc_attr( $lastfm_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'vimeo_id' ) ); ?>"><?php _e( 'Vimeo Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'vimeo_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vimeo_id' ) ); ?>" type="text" value="<?php echo esc_attr( $vimeo_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tumblr_id' ) ); ?>"><?php _e( 'Tumblr Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tumblr_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tumblr_id' ) ); ?>" type="text" value="<?php echo esc_attr( $tumblr_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'instagram_id' ) ); ?>"><?php _e( 'Instagram Username:', 'tiga' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram_id' ) ); ?>" type="text" value="<?php echo esc_attr( $instagram_id ); ?>" />
		</p>

	<?php
	}
 
}
?>