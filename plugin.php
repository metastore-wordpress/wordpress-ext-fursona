<?php
/**
 * Plugin Name:     (WP-EXT) Fursona
 * Plugin URI:      https://metastore.pro/
 *
 * Description:     Fursona post type and more.
 *
 * Author:          Kitsune Solar
 * Author URI:      https://kitsune.solar/
 *
 * Version:         1.0.0
 *
 * Text Domain:     wp-ext-fursona
 * Domain Path:     /languages
 *
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Loading `WP_EXT_Fursona`.
 */

function run_wp_ext_fursona() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona_Post_Type.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona_Post_Field.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona_Taxonomy.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona_User_Role.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona_Theme.class.php' );
//  require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona_Template.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona_ShortCode.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Fursona_Widget.class.php' );
}

run_wp_ext_fursona();
