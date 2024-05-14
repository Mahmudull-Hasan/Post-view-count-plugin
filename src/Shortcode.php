<?php

namespace PostViewCount\Src;
class Shortcode {

    public function __construct() {

        // display view count in the content.
		add_shortcode( 'post_view_count', array( $this, 'post_view_count_shortcode' ) );

    }

    /**
	 * display view count in the content 
	 *
	 * @param array $atts
	 */

	public function post_view_count_shortcode( $atts ) {

		$default_atts = array(
			'id' => '',
		);

		$attributes = shortcode_atts( $default_atts, $atts );
		$id         = intval( sanitize_text_field( $attributes['id'] ) );
		if ( empty( $id ) || $id === 0 ) {

			$custom_content  = '<div class="box">';
			$custom_content .= '<h2>' . __( 'Please provide valid post id', 'post_view_count' ) . '</h2>';
			$custom_content .= '</div>';

			return $custom_content;
		}

		$view_count = get_post_meta( $id, 'view_count', true );
		$view_count = $view_count ? $view_count : 0;

		$custom_content  = '<div class="box">';
		$custom_content .= '<h2>' . __( 'Total Post View: ', 'post_view_count' ) . number_format($view_count) . '</h2>';
		$custom_content .= '</div>';
		return $custom_content;


		if(is_single()){
            global $post;
            $post_id = $post->ID;
        }else{
            $post_id = '';
        }

        // shortcode attributes
        $atts = shortcode_atts(array(
            'id' => $post_id,   
        ), $atts, 'postvc_view_count');

        $post_id = $atts['id'] ? $atts['id'] : $post_id;

        $count = get_post_meta($post_id, 'postvc_post_views', true);
        $count = number_format(intval($count));
	}
}