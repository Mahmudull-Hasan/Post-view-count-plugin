<?php
namespace PostViewCount\Src;

class Count_view {
    public function __construct() {
        // Post count view.
		add_action( 'wp_head', array( $this, 'count_view' ) );
    }

	/**
	 * Post count view function
	 */
	public function count_view() {
		if ( is_single() ) {
			$view_count = get_post_meta( get_the_ID(), 'view_count', true );
			$view_count = $view_count ? $view_count : 0;
			++$view_count;
			update_post_meta( get_the_ID(), 'view_count', $view_count );
		}
	}
}