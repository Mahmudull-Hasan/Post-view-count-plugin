<?php

/**
 * Plugin Name: 		Post View Conut
 * Description: 		Post View Conut Plugin
 * Version: 			1.0.0
 * Author: 				Hasan Mahmud
 * Author URI: 			http://hasan.me
 * Plugin URI: 			http://google.com
 * text-domain: 		post_view_count
 * Domain Path:       	/languages
 */

namespace PostViewCount;
require_once 'vendor/autoload.php';

class Post_View_Count {

	// ** init function */
	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}
	// ** init method */
	function init() {

		// Load Assets.
		add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );

		new Src\Posts_View_Count_Column;

		new Src\Count_View;

		new Src\Shortcode;

		new Src\Post_id_column;

		new Src\Sortable_column;

		new Src\Manage_User_Column;
	}

	/**
	 * Load Assets File.
	 */
	function load_assets() {
		$asset_directory = plugins_url( 'assets/', __FILE__ );
		wp_enqueue_style( 'plugin-main-style', $asset_directory . 'css/style.css', array(), time() );
	}
	
}
new Post_View_Count();
