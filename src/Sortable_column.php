<?php
namespace PostViewCount\Src;

class Sortable_column {

    public function __construct() {
        
        // Manage sortable column.
		add_filter( 'manage_edit-post_sortable_columns', array( $this, 'add_sortable_column' ) );
    }

    /**
	 * Manage sortable columns
	 *
	 * @param array $columns
	 */

	public function add_sortable_column( $columns ) {
		$columns['id']         = 'ID';
		$columns['view_count'] = 'View Count';
		return $columns;
	}
}