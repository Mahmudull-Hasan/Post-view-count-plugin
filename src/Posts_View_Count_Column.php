<?php
namespace PostViewCount\Src;

class Posts_View_Count_Column {
    public function __construct() {

        // Mange Post Count Column.
		add_filter( 'manage_posts_columns', array( $this, 'mangage_posts_count_column' ) );

        // display column data.
		add_action( 'manage_posts_custom_column', array( $this, 'manage_view_count_column' ), 10, 2 );
    }

    /**
	 * Add Post View Count Column
	 *
	 * @param string $columns
	 * 
	 */
	public function mangage_posts_count_column( $columns ) {
		$columns['view_count'] = 'Post View Count';
		return $columns;
	}

	/**
	 * display column data
	 *
	 * @param string $column
	 * @param int $post_id
	 * 
	 */
	public function manage_view_count_column( $column, $post_id ) {
		if ( $column == 'view_count' ) {
			$view_count = get_post_meta( $post_id, 'view_count', true );
			$view_count = $view_count ? $view_count : 0;
			echo $view_count;
		}
	}
}