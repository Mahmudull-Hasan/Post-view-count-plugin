<?php
namespace PostViewCount\Src;

class Post_id_column {
    public function __construct() {

        // add posts id column.
		add_filter( 'manage_posts_columns', array( $this, 'add_id_column' ), 10, 2 );

		// display show post id.
		add_filter( 'manage_posts_custom_column', array( $this, 'manage_id_column' ), 10, 2 );
    }

    /**
	 * add posts id column
	 *
	 * @param array $columns
	 */
	public function add_id_column( $columns ) {
		$new_columns = array();
		foreach ( $columns as $key => $value ) {
			$new_columns[ $key ] = $value;
			if ( 'cb' === $key ) {
				$new_columns['id'] = 'ID';
			}
		}
		return $new_columns;
	}

	/**
	 * display show post id
	 *
	 * @param string $column
	 * @param int $post_id
	 */
	public function manage_id_column( $column, $post_id ) {
		if ( 'id' === $column ) {
			echo $post_id;
			
		}

	}
}