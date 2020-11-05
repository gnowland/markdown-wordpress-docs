<?php
/**
 *
 * @wordpress-plugin
 * Plugin Name:    Markdown WordPress Docs
 * Plugin URI:     https://github.com/gnowland/markdown-wordpress-docs
 * Description:    Generate WordPress website documentation from Markdown Fieles
 * Version:        1.0.0
 * Author:         Gifford Nowland
 * Author URI:     https://hi@giffordnowland.com
 * License:        GPLv3
 * 
 * @since             1.0.0
 * @package           Markdown_WordPress_Docs
 * 
 */

 // Prevent direct execution
if (!defined('WPINC')) {
    die;
};

class Markdown_WordPress_Docs {
  // Static property to hold our singleton instance
  static $instance = false;

  /**
   * This is our constructor
   *
   * @return void
   */
  private function __construct() {
    add_action( 'admin_menu', [ $this, 'add_admin_menu' ] );
    add_action( 'admin_enqueue_scripts', [ $this, 'admin_scripts' ] );
  }

  /**
   * If an instance exists, this returns it.  If not, it creates one and retuns it.
   *
   * @return Markdown_WordPress_Docs
   */
  public static function init() {
    if ( !self::$instance )
      self::$instance = new self;
    return self::$instance;
  }

  /**
	 * Admin styles
	 *
	 * @return void
	 */

	public function admin_scripts() {
    $screen = get_current_screen();
    if ( !empty($screen) && $screen->id === 'dashboard_page_docs' ) {
      wp_enqueue_style( 'mdwp-docs', plugins_url('mdwp-docs.css', __FILE__), [], '1.0.0', 'all' );
      wp_enqueue_script( 'mdwp-docs', plugins_url('mdwp-docs.js', __FILE__), [], '1.0.0', true );
    }
  }

  /**
   * Register the administration menu for this plugin into the WordPress Dashboard menu.
   *
   * @since    1.0.0
   */
  public function add_admin_menu() {
    /* Add settings page */
    add_dashboard_page( 'Seabird Tracking Database Documentation', 'Site Help', 'manage_options', 'mdwp-docs', [ $this, 'display_docs' ] );
  }

  public function display_docs() {
    require __DIR__ . '/vendor/autoload.php';
    include_once( 'mdwp-docs-display.php' );
  }
}

if ( is_admin() ) {
  // Instantiate our class
  $Markdown_WordPress_Docs = Markdown_WordPress_Docs::init();
}
