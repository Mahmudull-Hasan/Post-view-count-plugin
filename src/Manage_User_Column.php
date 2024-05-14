<?php
namespace PostViewCount\Src;

class Manage_User_Column {

    public function __construct() {
        add_filter('manage_users_columns', array( $this, 'manage_users_column'));
        add_filter( 'manage_users_custom_column', array( $this, 'gtp_users_table_content'), 10, 2 );
    }

    public function manage_users_column( $columns ) {
        $columns['view_count'] = 'Post View';
		return $columns;
    }

    public function gtp_users_table_content( $column, $user_id ) {
        if ( $column == 'view_count' ) {
			$view_count = get_post_meta( $post_id, 'view_count', true );
			$view_count = $view_count ? $view_count : 0;
			echo $view_count;
		}
    }
}